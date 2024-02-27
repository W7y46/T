<html>
<head>
<title>แบบทดสอบวิชาชีพครู</title>
</head>
<center><h1>แบบทดสอบวิชาพื้นฐานและวิชาชีพครู</h1></center> 

<style>
        body {
            background-color: 	#F0F8FF; /* กำหนดสีพื้นหลังของหน้าเว็บ */
            font-family: 'TH Kodchasal', sans-serif; /* กำหนดแบบอักษร */
			font-size: 22px;
        }

        .content {
            text-align: center;
            padding: 2px;
        }
		h1 {
            background-color: #99CCFF; /* กำหนดสีพื้นหลังของตัวหนังสือ */
            color: #000000; /* กำหนดสีข้อความ */
            padding: 2px; /* กำหนดการเพิ่มพื้นที่รอบข้อความ */
			border-radius: 60px;
			border: 6px solid #3366FF;
        }
		
		 br {
            line-height: 0.5; /* กำหนดระยะห่างระหว่างบรรทัด */
        }	

		 h2 {
		    background-color: #66FF66;
            border: 6px solid #339900; /* กำหนดขอบของกรอบ */
            padding: 6px; /* กำหนดการเพิ่มพื้นที่รอบข้อความ */
            margin: 20px auto; /* กำหนดระยะห่างระหว่างกรอบกับเนื้อหา */
            max-width: 200px; /* กำหนดความกว้างสูงสุดของกรอบ */
			text-align: center;
			border-radius: 60px;
         }
    
    </style>
<?php


//กำหนดคะเเนนเริ่มต้น
$score=0;
echo "<center><b>ชื่อ : </b>".$_POST["name"]."<br></center>";
echo "<center><b>Email : </b>".$_POST["email"]."<br></center>";



//ข้อ1
echo "<strong>ข้อที่ 1 <br></strong>";
if ($_POST["book1"]=="ครูจอมทัพพิจารณาข้อมูลนักเรียนเพื่อการจัดกลุ่ม และดูแลช่วยเหลือนักเรียนได้อย่างถูกต้อง")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ2
echo "<strong>ข้อที่ 2 <br></strong>";
if ($_POST["book2"]=="สามารถนำข้อเท็จจริงเหล่านั้นมาใช้ในการปรับปรุงการเรียนการสอน การจัดกิจกรรมการเรียนรู้")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ3
echo "<strong>ข้อที่ 3 <br></strong>";
if ($_POST["book3"]=="การรู้จักนักเรียนเป็นรายบุคคล > การคัดกรองนักเรียน > การส่งเสริมนักเรียน > การป้องกันและแก้ไขปัญหา")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ4
echo "<strong>ข้อที่ 4 <br></strong>";
if ($_POST["book4"]=="ความต้องการความปลอดภัย")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ5
echo "<strong>ข้อที่ 5 <br></strong>";
if ($_POST["book5"]=="ครู Dวิเคราะห์ผลการคัดกรองพฤติกรรมของนักเรียน แบ่งนักเรียนออกเป็น 3 กลุ่ม คือ กลุ่มป้องกันกลุ่มแก้ไข กลุ่มส่งเสริมและพัฒนา")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ6
echo "<strong>ข้อที่ 6 <br></strong>";
if ($_POST["book6"]=="ช่วยจัดการและควบคุมเด็กที่มีความบกพร่องทางร่างกายได้แนวคิด : จุดมุ่งหมายทั่วไปของการเรียนจิตวิทยาการศึกษา คือ เพื่อให้เข้าใจ (Understanding) เพื่อการทำนาย (Prediction) และเพื่อควบคุม (Control) พฤติกรรมการเรียนรู้ของมนุษย์ในสถานการณ์ต่าง")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ7
echo "<strong>ข้อที่ 7 <br></strong>";
if ($_POST["book7"]=="ู้เรียนสามารถใช้ชีวิตอยู่ในสังคมในทุกสภาพแวดล้อมได้")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ8
echo "<strong>ข้อที่ 8 <br></strong>";
if ($_POST["book8"]=="การแนะแนวด้านส่วนตัวและสังคม")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ9
echo "<strong>ข้อที่ 9 <br></strong>";
if ($_POST["book9"]=="การแนะแนวด้านส่วนตัวและสังคเพื่อนำข้อมูลที่รวบรวมมาได้ของพฤติกรรมแต่ละบุคคลมาอธิบาย ทำนาย และควบคุม")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ10
echo "<strong>ข้อที่ 10 <br></strong>";
if ($_POST["book10"]=="ครูสมใจออกแบบกิจกรรมการเรียนรู้ที่มีทั้งการทำงานกลุ่มค้นคว้าด้วยตนเองและการอภิปรายสถานการณ์ปัญหาการเรียนรู้จากสื่อที่มีการผสมผสาน")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ11
echo "<strong>ข้อที่ 11 <br></strong>";
if ($_POST["book11"]=="ความต้องการที่จะเข้าใจตนเองอย่างแท้จริง")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ12
echo "<strong>ข้อที่ 12 <br></strong>";
if ($_POST["book12"]=="การเปิดโอกาสให้นักเรียนทุกคนร่วมแสดงความคิดเห็นด้วยประเด็นคำถามปลายเปิด")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ13
echo "<strong>ข้อที่ 13 <br></strong>";
if ($_POST["book13"]=="บริการสนเทศ")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ14
echo "<strong>ข้อที่ 14 <br></strong>";
if ($_POST["book14"]=="รูปแบบการอบรมเลี้ยงดูแบบเอาใจใส่")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ15
echo "<strong>ข้อที่ 15 <br></strong>";
if ($_POST["book15"]=="บริการศึกษารวบรวมข้อมูลเป็นรายบุคคล")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ16
echo "<strong>ข้อที่ 16 <br></strong>";
if ($_POST["book16"]=="พฤติกรรมภายนอกที่ไม่สามารถสังเกตได้ด้วยประสาทสัมผัสโดยตรง")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ17
echo "<strong>ข้อที่ 17 <br></strong>";
if ($_POST["book17"]=="เป็นพฤติกรรมที่ครูต้องให้ความสนใจ หาสาเหตุเพื่อหาแนวทางแก้ไขต่อไป")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ18
echo "<strong>ข้อที่ 18 <br></strong>";
if ($_POST["book18"]=="ให้นักเรียนชั้นประถมศึกษาปีที่ 5 คำนวณเลขและแก้โจทย์ปัญหาทางคณิตศาสตร์")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ19
echo "<strong>ข้อที่ 19 <br></strong>";
if ($_POST["book19"]=="แบบประเมินพฤติกรรมเด็ก")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ20
echo "<strong>ข้อที่ 20 <br></strong>";
if ($_POST["book20"]=="ครูวราภรณ์ใช้เกมมาช่วยจัดกิจกรรม เพราะเป็นส่วนหนึ่งของ Active Learning และมีส่วนร่วมใน
การเรียนรู้")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ21
echo "<strong>ข้อที่ 21 <br></strong>";
if ($_POST["q21"] == "กฎแห่งความพร้อม") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ22
echo "<strong>ข้อที่ 22 <br></strong>";
if ($_POST["q22"] == "ตั้งคำถามสะท้อน เพื่อให้นักเรียนได้สะท้อนผลหรืออธิบายสิ่งที่ได้จากการเรียนรู้") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ23
echo "<strong>ข้อที่ 23 <br></strong>";
if ($_POST["q23"] == "แรงจูงใจภายใน") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}////ข้อ24
echo "<strong>ข้อที่ 24 <br></strong>";
if ($_POST["q24"] == "อัลเบิร์ต แบนดูรา") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ25
echo "<strong>ข้อที่ 25 <br></strong>";
if ($_POST["q25"] == "การแนะแนวอาชีพ") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ26
echo "<strong>ข้อที่ 26 <br></strong>";
if ($_POST["q26"] == "ครูแก้ว ให้คำชมเชยลูกศิษย์ทุกครั้งที่เขาเหล่านั้นท่องคำศัพท์ภาษาอังกฤษได้") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ27
echo "<strong>ข้อที่ 27 <br></strong>";
if ($_POST["q27"] == "ปรัชญาการศึกษาปฏิรูปนิยม") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ28
echo "<strong>ข้อที่ 28 <br></strong>";
if ($_POST["q28"] == "ครูสมคิดให้นักเรียนวัดความถนัดของตนเองพร้อมกับให้ข้อมูลเกี่ยวกับแนวทางการประกอบอาชีพและการศึกษาต่อที่สอดคล้องกับความถนัดและความสนใจของนักเรียนอย่างรอบด้าน") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ29
echo "<strong>ข้อที่ 29 <br></strong>";
if ($_POST["q29"] == "ใช้วิธีการสัมภาษณ์ผู้ที่เกี่ยวข้องกับ ด.ญ.ธิดารัตน์ แล้วไปเยี่ยมบ้าน") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ30
echo "<strong>ข้อที่ 30 <br></strong>";
if ($_POST["q30"] == "ควรช่วยเหลือกันในสิ่งที่พอจะช่วยกันได้อย่างเหมาะสม") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ31
echo "<strong>ข้อที่ 31 <br></strong>";
if ($_POST["q31"] == "แนะนำและฝึกให้นักเรียนเป็นคนมั่นใจในตนเอง") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ32
echo "<strong>ข้อที่ 32 <br></strong>";
if ($_POST["q32"] == "เรียนรู้ได้ดีผ่านการสัมผัสและการกระทำ") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ33
echo "<strong>ข้อที่ 33 <br></strong>";
if ($_POST["q33"] == "เถ้าตั้งใจอยากเรียนครูก็ควรเรียน เพราะถ้ามีความสามารถจริงก็หางานทำได้") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ34
echo "<strong>ข้อที่ 34 <br></strong>";
if ($_POST["q334"] == "พฤติกรรมภายนอกเป็นตัวกำหนดพฤติกรรมภายใน") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ35
echo "<strong>ข้อที่ 35 <br></strong>";
if ($_POST["q35"] == "การจัดการเรียนรู้ในลักษณะการบูรณาการเนื้อหาและวิธีการเพื่อให้การเรียนรู้มีลักษณะเป็นองค์รวม") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ36
echo "<strong>ข้อที่ 36 <br></strong>";
if ($_POST["q36"] == "พฤติกรรมของมนุษย์เป็นกระบวนการต่อเนื่อง") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ37
echo "<strong>ข้อที่ 37 <br></strong>";
if ($_POST["q37"] == "เป็นปัญหาจากการขาดสมาธิในการเรียนหรืออาการบ่งบอกถึงภาวะสมาธิสั้น") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ38
echo "<strong>ข้อที่ 38 <br></strong>";
if ($_POST["q38"] == "กำหนดภาระงานที่ให้นักเรียนสามารถค้นคว้าด้วยตนเองจากสื่อการเรียนรู้ทั้งในชั้นเรียนและนอก ห้องเรียนอย่างยืดหยุ่น") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ39
echo "<strong>ข้อที่ 39 <br></strong>";
if ($_POST["q39"] == "ครูบีสังเกตพฤติกรรมของนักเรียนในชั้นเรียน พบว่า เด็กชายบอยชอบเก็บตัว เข้ากับเพื่อนไม่ค่อยได้") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ40
echo "<strong>ข้อที่ 40 <br></strong>";
if ($_POST["q40"] == "ครู D วิเคราะห์ผลการคัดกรองพฤติกรรมของนักเรียน แบ่งนักเรียนออกเป็น 3 กลุ่ม คือ กลุ่มป้องกันกลุ่มแก้ไข กลุ่มส่งเสริมและพัฒนา") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ41
echo "<strong>ข้อที่ 41 <br></strong>";
if ($_POST["q41"] == "ครูสมปองกำหนดให้นักเรียนเรียนรู้จากสื่อและแหล่งเรียนรู้ต่าง ๆ ด้วยตนเองและผสมผสานกับการใช้กิจกรรมกลุ่ม") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ42
echo "<strong>ข้อที่ 42 <br></strong>";
if ($_POST["q42"] == "ผู้ปกครองมีการจัดระบบการควบคุมและวางกฎเกณฑ์ให้เด็กปฏิบัติตามอย่างเข้มงวด") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ43
echo "<strong>ข้อที่ 43 <br></strong>";
if ($_POST["q43"] == "เป็นพฤติกรรมที่ครูควรให้ความสำคัญซึ่งอาจจะต้องมีการศึกษาข้อมูลนักเรียนเพิ่มเติมที่หลากหลาย วิธีเพื่อค้นหาสาเหตุและหาทางแก้ไขต่อไป") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ44
echo "<strong>ข้อที่ 44 <br></strong>";
if ($_POST["q44"] == "ครูสมศรีจัดการเรียนรู้โดยการให้ดูคลิปวิดีโอการพับกล่องกระดาษและให้พับกล่องกระดาษตาม") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ45
echo "<strong>ข้อที่ 45 <br></strong>";
if ($_POST["q45"] == "ครูลิลลี่สอนการทักทายเป็นภาษาอังกฤษโดยใช้เพลงผ่านกิจกรรมการร้องเพลง") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ46
echo "<strong>ข้อที่ 46 <br></strong>";
if ($_POST["q46"] == "ครูลิลลี่สอนการทักทายเป็นภาษาอังกฤษโดยใช้เพลงผ่านกิจกรรมการร้องเพลงเริ่มจากการศึกษาข้อมูลพื้นฐานทั่วไป จากนั้นจึงสัมภาษณ์ครอบครัวด้วยการไปเยี่ยมบ้าน แล้วจึง พูดคุยถึงแนวทางในการแก้ไขปัญหาร่วมกันระหว่างครูและผู้ปกครอง") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ47
echo "<strong>ข้อที่ 47 <br></strong>";
if ($_POST["q47"] == "บรรยากาศที่เปิดโอกาสให้ผู้เรียนได้มีส่วนร่วมทางการเรียนรู้ภายใต้การกำกับควบคุมดูแลของผู้สอน
อย่างใกล้ชิด") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ48
echo "<strong>ข้อที่ 48 <br></strong>";
if ($_POST["q48"] == "ให้คำชมหรือข้อเสนอแนะที่เป็นประโยชน์ต่อผลการพัฒนาโครงงานให้สมบูรณ์ยิ่งขึ้น") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ49
echo "<strong>ข้อที่ 49 <br></strong>";
if ($_POST["q49"] == "กำหนดกติกาในการเรียนรู้ให้ชัดเจนเพื่อให้นักเรียนได้ทำตาม รวมถึงการพยายามออกแบบกิจกรรมการเรียนรู้ที่เน้นให้ผู้เรียนได้มีส่วนร่วมเพื่อให้นักเรียนหันมาสนใจบทเรียนมากขึ้น") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ50
echo "<strong>ข้อที่ 50<br></strong>";
if ($_POST["q50"] == "รับฟังปัญหาและร่วมพูดคุยผู้ปกครอง เพื่อร่วมกันหาวิธีการแก้ไขปัญหาและร่วมวางแผนการจัดการเวลาให้กับนักเรียนเพื่อไม่ให้กระทบต่อการเรียน") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}




////////////////////////////////////////////////////////////////////////////////////////////////
//รายงานคะเเนน
echo "<h2>คะแนนที่ได้ : "."$score</h2>";
?>




</body>
</body>
</html>