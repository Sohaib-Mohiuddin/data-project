import mysql.connector
import json

mydb = mysql.connector.connect(
  host="db4free.net",
  user="yshaik392",
  passwd="testing123"
)

api={}
mycursor = mydb.cursor()

#Get courses
mycursor.execute("SELECT * FROM school_yshaik.courses")
courses=mycursor.fetchall()
api["Courses"]=courses


mycursor.execute("SELECT * FROM school_yshaik.enrolled_in")
enrolled_in=mycursor.fetchall()
api["enrolled_in"]=enrolled_in



mycursor.execute("SELECT * FROM school_yshaik.grades")
grades=mycursor.fetchall()
api["grades"]=grades
#remove decimal

mycursor.execute("SELECT * FROM school_yshaik.professor")
professor=mycursor.fetchall()
api["professor"]=professor
#remove dob

mycursor.execute("SELECT * FROM school_yshaik.review")
review=mycursor.fetchall()
api["review"]=review
#remove decimal

mycursor.execute("SELECT * FROM school_yshaik.student")
student=mycursor.fetchall()
api["student"]=student
#remove date

# 
# stringApi=str(api)

# stringApi.replace("Decimal", "")
# stringApi.replace("datetime.date", "")
# # stringApi=stringApi.replace("(", "[")
# # stringApi=stringApi.replace(")", "]")
# stringApi=stringApi.replace("'", "\"")
# # stringApi=stringApi.replace(")", "]")
# print("______________________________________")

# for x in api.keys():
# 	api[x].replace("Decimal", "")
# 	api[x].replace("datetime.date", "")
# 	# print(api[x], "++++")



print(api)

json=json.dumps(api)
f=open("api.json", "w")
f.write(json)
f.close()




