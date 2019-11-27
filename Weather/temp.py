import mysql.connector

mydb = mysql.connector.connect(
host="db4free.net",
user="yshaik392",
passwd="testing123",
database="school_yshaik"
)  

country="hihu"
weather=90000
mycursor = mydb.cursor()


sql = "INSERT INTO weather(location, weather) VALUES (%s, %s)"
val=(country, weather)
mycursor.execute(sql, val)


mydb.commit()

print(mycursor.rowcount, "record inserted.")