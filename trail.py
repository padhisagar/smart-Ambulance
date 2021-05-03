import pymysql
from math import radians, sin, cos, acos
l=[]
ly=[]
conn = pymysql.connect(host='localhost',user='root',password='',db='communication')

a = conn.cursor()

a.execute("SELECT * FROM `accident location` WHERE status='y' LIMIT 1 ")


myresult = a.fetchall()

for x in myresult:
  slon=x[1]
  slat=x[2]
  idacci=x[0]
  status = x[3]

  a.execute("SELECT `id`,`latitude`, `longi` FROM `hosiptal_det`")
  data = a.fetchall()
  for y in data:
    idh=y[0]
    elat=y[1]
    elon=y[2]
    dist = 6371.01 * acos(sin(slat)*sin(elat) + cos(slat)*cos(elat)*cos(slon - elon))
    mysqlquery = "INSERT INTO `nearest_hosi`(`hid`, `distance`) VALUES ( %s , %s)"
    a.execute(mysqlquery,(int(idh),float(dist)))
    
a.execute("SELECT `hid`, `distance` FROM `nearest_hosi` ORDER BY distance LIMIT 1")
acc = a.fetchall()
for i in acc:
  hosi_id = i[0]
  distance = i[1]
  print(hosi_id)
  updt = "INSERT INTO `accident_detail`(`hosiptal_id`, `longitude`, `latit`, `distance`) VALUES (%s,%s,%s,%s)"
  a.execute(updt,(int(hosi_id),float(slon),float(slat),float(distance)))
  thg = "UPDATE `accident location` SET `status`='n' WHERE id= %s "
  a.execute(thg,int(idacci))
  print("successfully")


a.execute("DELETE FROM `nearest_hosi`")


          
    
  

