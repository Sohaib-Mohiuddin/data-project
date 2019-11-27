from flask import Flask, render_template, request, jsonify
import requests as apirequest
import mysql.connector


mydb = mysql.connector.connect(
  host="db4free.net",
  user="yshaik392",
  passwd="testing123",
  database="school_yshaik"
)


app=Flask(__name__)
# app.debug = True

# app.run(debug=True)

@app.route("/")
def index():

    weather=[{
    "temp": 276.31,
    "pressure": 1007,
    "humidity": 86,
    "temp_min": 274.82,
    "temp_max": 277.59
  }]

    if request.args.get("search") is not None:
        search=request.args.get("search")
        response=apirequest.get(f"http://api.openweathermap.org/data/2.5/weather?q={search}&appid=b81347c5672e23b4e026a7533d499673")
        data=response.json()
        weather=[data["main"]]
        country=[data["name"]]
        x=weather[0]["temp"]
        celcius=round(x-273.15)
        print(celcius, country[0])

        lon=[data["coord"]["lon"]][0]
        lat=[data["coord"]["lat"]][0]
        print("Lon:",lon,"Lat:", lat)

        mycursor = mydb.cursor()


        sql = "INSERT INTO weather(location, weather) VALUES (%s, %s)"
        # val = ("John", "Highway 21")
        val=(country[0], celcius)
        mycursor.execute(sql, val)

        mydb.commit()

        #insert into coordinates

        mycursor = mydb.cursor()

        sql = "INSERT INTO coordinates(location, latitude, longitude) VALUES (%s, %s, %s)"
        # val = ("John", "Highway 21")
        val=(country[0], lat, lon)
        mycursor.execute(sql, val)

        mydb.commit()

        # print(mycursor.rowcount, "record inserted.")
        # myresult=mycursor.fetchall()
        # print(myresult)


        
    return render_template("index.html", weather=weather)




