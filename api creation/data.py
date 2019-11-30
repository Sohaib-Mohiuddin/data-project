import mysql.connector
import json
import os

mydb = mysql.connector.connect(
  host="localhost",
  user="",
  passwd=""
)

api={}
mycursor = mydb.cursor()

#Get courses
mycursor.execute("SELECT * FROM school_yshaik.courses")
courses=mycursor.fetchall()
api["Courses"]=courses

#Get all information from enrolled in table
mycursor.execute("SELECT * FROM school_yshaik.enrolled_in")
enrolled_in=mycursor.fetchall()
#add information from table into dictionary with matching key to its value
api["enrolled_in"]=enrolled_in


#Get all information from grades table
mycursor.execute("SELECT * FROM school_yshaik.grades")
grades=mycursor.fetchall()
#add information from table into dictionary with matching key to its value
api["grades"]=grades
#remove ecimal

#Get all information from professor table
mycursor.execute("SELECT * FROM school_yshaik.professor")
professor=mycursor.fetchall()
#add information from table into dictionary with matching key to its value
api["professor"]=professor

#Get all information from review table
mycursor.execute("SELECT * FROM school_yshaik.review")
review=mycursor.fetchall()
#add information from table into dictionary with matching key to its value
api["review"]=review

#Get all information from student table
mycursor.execute("SELECT * FROM school_yshaik.student")
student=mycursor.fetchall()
#add information from table into dictionary with matching key to its value
api["student"]=student

#print dictionary to screen for debugging
print(api)

#store information in json file
json=json.dumps(api)
f=open("api.json", "w")
f.write(json)
f.close()




