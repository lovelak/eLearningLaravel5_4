
## การติดตั้ง
วิธีที่ 1 ให้โหลดไฟล์ โดยคลิกที่ Clone or Download แล้วเลือก Download zip ก็จะได้ ไฟล์ webda.zip  แล้วให้แตก zip ออกมา แล้วนำไปวางไว้ที่ folder server ของเรา 

วิธีที่ 2 การ clone
การ clone ไฟล์ บน git ให้ติดตั้ง git scm ก่อนนะครับ
https://git-scm.com/

ในเครื่องของเรา อาจจะต้องติดตั้ง composer ด้วยนะครับ 



พอติดตั้งเสร็จแล้ว ก็ให้ cd ไป ยัง folder server ของเรา สมมุติ ผมใช้ MAMP PRO ก็ให้เรา cd เข้าไปยัง folder htdocs 

แล้วใช้คำสั่ง ตามลำดับ 

- git clone https://github.com/leksoft/webda
- cd webda
- composer update
- ตั้งค่าเชื่อมต่อฐานข้อมูล ที่ไฟล์ .env
- import database ไฟล์ db_webdas.sql ก่อน import ให้สร้างฐานข้อมูลขึ้นมาก่อน
- 

## backoffice
user : leksoft@gmail.com
pass : 514244227

ติดปัญหาตรงไหน สอบถามเรื่องการติดตั้งได้นะครับ 

อันนี้ เฟส ผม 
https://www.facebook.com/m.nakharin



#ผิดพลาดประการใด ก็แนะนำ ได้นะครับ

#ระบบพัฒนาด้วย PHP Laravel Framework 5.4.36
#รองรับ PHP >= 5.6.4

