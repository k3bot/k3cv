<?php
  $Birth = "01-10-1997";
  $today = date("Y-m-d");
  $k3age = date_diff(date_create($Birth), date_create($today));

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">  
    <!-- icon -->
	<link rel="shortcut icon" type="image/png" href="img/icon.png"/>

    <title>- K 3</title>
  </head>
  <body>
  
  <br/>
  <br/>
  <br/>
  <div class="container">
  
  <div class="col-12 d-flex justify-content-center">
  
<div class="col-8 col-md-3">
<div class="card">




<br/>
  <div class="d-flex justify-content-center">
  <div class="row">
  <img src="img/k3.png" class="rounded" height="60" width="60" alt="">
</div>
</div>



  <div class="d-flex justify-content-center">
  <div class="row">
  <div class="media">
  <div class="media-body">
    <h5 class="mt-0">King Abady</h5>
  </div>
</div>

</div>
</div>

  <div class="d-flex justify-content-center">
  <div class="row">
	<span class="badge badge-secondary">Front End Developer</span>
</div>
</div>
  <br/>
  <br/>
  
  
  <div class="d-flex justify-content-center">
  <div class="row">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link btn btn-outline-secondary active" id="v-pills-home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a><br/>
      <a class="nav-link btn btn-outline-secondary" id="v-pills-profile-tab" data-toggle="pill" href="#project" role="tab" aria-controls="v-pills-profile" aria-selected="false">Projects</a><br/>
      <a class="nav-link btn btn-outline-secondary" id="v-pills-messages-tab" data-toggle="pill" href="#Contact" role="tab" aria-controls="v-pills-messages" aria-selected="false">Contact</a>
    </div>
</div>
</div>
  
  <br/>
</div>
</div>

  <div class="col-6 col-md-10">

  <div class="d-flex justify-content-center">
  <div class="row">
    <div class="tab-content" id="v-pills-tabContent">
	
	
	
	
	
	
	
	
	
	  <!---------------------------------- Start Home --------------------------------->
	  
	  
	  
	  
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="v-pills-home-tab">




  
<div class="code-editor">
			<pre class="line-numbers">
				<code class="language-css">
/*

	Name : Abdalrhman Bostawe
	NickName : King Abady
	Age : <?php echo $k3age->format('%y'); ?>

	City : Egypt / Aswan
				
*/
				
				
Skills
	{
		
	    HTML : Bootstrap, UiKit, semantic Ui;
		CSS : CSS3;
	    JS : JQuery;
		PHP : PHP5.4 to PHP7;
		/* Managers Skills */
		Manager : Web Hosting / VPS Linux / VPS Windows / Domains
		 
	}	
</code>
</pre>
</div>

	  
	  
</div>

	  <!---------------------------------- End Home --------------------------------->
	  
	  
	  
	  

	  <!---------------------------------- Start Project --------------------------------->
	  
      <div class="tab-pane fade text-center" id="project" role="tabpanel" aria-labelledby="v-pills-profile-tab">
	  

			
	
			<br/>		
			
<div class="card">
  <img src="img/sarahah/1.png" class="card-img-top" height="500" alt="K3">
  <div class="card-body">
    <h5 class="card-title"><span class="badge badge-secondary">sarahah Script</span></h5>
    <p class="card-text">تصميم لموقع صراحة كامل , ( تسجيل حساب جديد مع عدم تكرار اليوزر او الايميل - تسجيل دخول عن طريق اليوزر والباسورد او الايميل والباسور - بحث عن عضو داخل الموقع عن طريق اسم المستخدم او اليوزر - ارسال رسالة ولا يمكن معرفة صاحب الرسالة نفس نظام الموقع الاساسي ) , الصفحة الخاصة بالمستخدم , ( أمكانية تغيير الصورة الشخصية واسم المستخدم - عرض كل الرسائل المرسلة مع المدة الزمنية المرسلة فيها - امكانية حذف الرسالة المرسلة علي الصفحة الشخصية )</p>
    <a data-toggle="pill" href="#sarahah" class="btn btn-outline-secondary"> مشاهدة المشروع </a>
  </div>
</div>
			
			<br/>		
			
<div class="card">
  <img src="img/news.png" class="card-img-top" height="500" alt="K3">
  <div class="card-body">
    <h5 class="card-title"><span class="badge badge-secondary">موقع لنشر الاخبار</span></h5>
    <p class="card-text">موقع اخباري بثلاثة اقسام ( الانمي - الالعاب - التكنولوجيا ) مع لوحة تحكم لاضافة وتعديل الاخبار لكل قسم واضافة حسابات للنشر</p>
    <a data-toggle="pill" href="#Buy" class="btn btn-outline-secondary">اطلب الان  <span class="badge badge-light">???$</span> </a>
  </div>
</div>
			<br/>		
			
<div class="card">
  <img src="img/login.png" class="card-img-top" height="500" alt="K3">
  <div class="card-body">
    <h5 class="card-title"><span class="badge badge-secondary">Login And Register System</span></h5>
    <p class="card-text">تسجيل حساب جديد وتسجيل ادخول وصفحة للعضو تتضمن المعلومات المسجلة تصميم بسيط Ui</p>
    <a data-toggle="pill" href="#Buy" class="btn btn-outline-secondary">اطلب الان  <span class="badge badge-light">???$</span> </a>
  </div>
</div>
			
			
			<br/>		
			
<div class="card">
  <img src="img/host.png" class="card-img-top" height="500" alt="K3">
  <div class="card-body">
    <h5 class="card-title"><span class="badge badge-secondary">قالب استضافة صفحة واحدة</span></h5>
    <p class="card-text">قالب لموقع استضافة سيرفرات صفحة واحدة تحتوي علي ( الخدمات - معلومات عنا - الاتصال بنا ) ونموذج الاتصال مبرمج لارسال الرسالة الي بريد الكتروني محدد</p>
     <!-- <a href="http://hostk3.herokuapp.com/" target="_blank" class="btn btn-outline-secondary">معاينة مباشرة</a> -->
    <a data-toggle="pill" href="#Buy" class="btn btn-outline-secondary">اطلب الان  <span class="badge badge-light">???$</span> </a>
  </div>
</div>
			
			
			<br/>		
			
<div class="card">
  <img src="img/fort.png" class="card-img-top" height="500" alt="K3">
  <div class="card-body">
    <h5 class="card-title"><span class="badge badge-secondary">Script Fortnite</span></h5>
    <p class="card-text">سكربت خاص بلعبة فورتنايت لمعرفة عدد القتلات باسم او الاي دي الخاص بالاعب ومعرفة الشوب او المتجر اليومي والعناصر القادمة للمتجر ويتجدد بشكل يومي وتلقائي</p>
     <!-- <a href="http://fortstat.herokuapp.com/" target="_blank" class="btn btn-outline-secondary">معاينة مباشرة</a> -->
    <a data-toggle="pill" href="#Buy" class="btn btn-outline-secondary">اطلب الان  <span class="badge badge-light">???$</span> </a>
  </div>
</div>		

			<br/>		
			
<div class="card">
  <img src="img/k3news.png" class="card-img-top" height="500" alt="K3">
  <div class="card-body">
    <h5 class="card-title"><span class="badge badge-secondary">سكربت اخر الاخبار</span></h5>
    <p class="card-text">سكربت يقوم بجلب اخر الاخبار المتنوعة ونشرها بالطريقة التي تظهر في الصورة اعلاه ويتم جلب الاخبار بطريقة تلقائية ومستمرة</p>
   <!--  <a href="http://k3news.herokuapp.com/" target="_blank" class="btn btn-outline-secondary">معاينة مباشرة</a> -->
    <a data-toggle="pill" href="#Buy" class="btn btn-outline-secondary">اطلب الان  <span class="badge badge-light">???$</span> </a>
  </div>
</div>
			
			
			
			
			
			
			
			
			
	
	  
			
			
	<br/>		
				
	<br/>		
	  
	  </div>
	  
	  
	  
	  <!---------------------------------- End Project --------------------------------->
	  
	  
	  <!---------------------------------- Start Sarahah --------------------------------->
	  
      <div class="tab-pane fade shadow-lg p-3 mb-5 text-center" id="sarahah" role="tabpanel" aria-labelledby="v-pills-messages-tab">
	  
	  
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><span class="badge badge-secondary">sarahah Script</span></h5>
    <p class="card-text">تصميم لموقع صراحة كامل , ( تسجيل حساب جديد مع عدم تكرار اليوزر او الايميل - تسجيل دخول عن طريق اليوزر والباسورد او الايميل والباسور - بحث عن عضو داخل الموقع عن طريق اسم المستخدم او اليوزر - ارسال رسالة ولا يمكن معرفة صاحب الرسالة نفس نظام الموقع الاساسي ) , الصفحة الخاصة بالمستخدم , ( أمكانية تغيير الصورة الشخصية واسم المستخدم - عرض كل الرسائل المرسلة مع المدة الزمنية المرسلة فيها - امكانية حذف الرسالة المرسلة علي الصفحة الشخصية )</p>
    <a data-toggle="pill" href="#Buy" class="btn btn-outline-secondary">اطلب الان  <span class="badge badge-light">???$</span> </a>
  </div>
	<br/>		
	<br/>		
	<br/>		
    <h5 class="card-title"><span class="badge badge-secondary">Home</span></h5>
  <img src="img/sarahah/1.png" class="card-img-top" height="500" alt="K3">	
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">About</span></h5>
  <img src="img/sarahah/2.png" class="card-img-top" height="500" alt="K3">	
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Contact</span></h5>
  <img src="img/sarahah/3.png" class="card-img-top" height="500" alt="K3">
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Search</span></h5>
  <img src="img/sarahah/12.png" class="card-img-top" height="500" alt="K3">
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Search 2</span></h5>
  <img src="img/sarahah/13.png" class="card-img-top" height="500" alt="K3">
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Register Username already taken</span></h5>
  <img src="img/sarahah/4.png" class="card-img-top" height="500" alt="K3">
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Register Email already taken</span></h5>
  <img src="img/sarahah/5.png" class="card-img-top" height="500" alt="K3">
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Register Done</span></h5>
  <img src="img/sarahah/6.png" class="card-img-top" height="500" alt="K3">
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Login</span></h5>
  <img src="img/sarahah/7.png" class="card-img-top" height="500" alt="K3">
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Send Message</span></h5>
  <img src="img/sarahah/8.png" class="card-img-top" height="500" alt="K3">
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Profile Empty Message</span></h5>
  <img src="img/sarahah/9.png" class="card-img-top" height="500" alt="K3">
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Profile with Message</span></h5>
  <img src="img/sarahah/10.png" class="card-img-top" height="500" alt="K3">
	<br/>		
	<br/>	
    <h5 class="card-title"><span class="badge badge-secondary">Profile Edit</span></h5>
  <img src="img/sarahah/11.png" class="card-img-top" height="500" alt="K3">
</div>
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>

	  <!---------------------------------- End Sarahah --------------------------------->	  
	  
	  <!---------------------------------- Start Buy --------------------------------->
	  
      <div class="tab-pane fade shadow-lg p-3 mb-5" id="Buy" role="tabpanel" aria-labelledby="v-pills-messages-tab">
	  
	  
	<form method="post" action="">
	<div class="form-group">
    <label for="exampleFormControlTextarea1">Your Information</label><br>
    <label for="exampleFormControlTextarea1"><span class="badge badge-light" style="color: #ffffff!important;background-color: #e91e63!important;">ملاحظة النموذج تجريبي ولا يعمل</span></label>
	<input type="text" class="form-control" placeholder="Fullname" maxlength="40" required><br/>
	<input type="email" class="form-control" placeholder="Email" required><br/>
	<input type="text" class="form-control" placeholder="Number" maxlength="20" required><br/>
	</div>
	  <div class="form-group">
    <label for="exampleFormControlTextarea1">Select Script</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>sarahah Script</option>
      <option>Script Fortnite</option>
      <option>موقع لنشر الاخبار</option>
      <option>Login And Register System</option>
      <option>قالب استضافة صفحة واحدة</option>
      <option>سكربت اخر الاخبار</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Add Note</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
	<input type="submit" class="btn btn-outline-secondary"><br/>
	</form>
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>

	  <!---------------------------------- End Buy --------------------------------->
	  
	  <!---------------------------------- Start Contant --------------------------------->
	  
      <div class="tab-pane fade shadow-lg p-3 mb-5" id="Contact" role="tabpanel" aria-labelledby="v-pills-messages-tab">
  <div class="text-center">

  
	  
	  
    <h3 class="font-weight-bolder"><kbd>Contant Us</kbd></h3><br/><br/>


	
<p><i class="fab fa-facebook fa-lg fa-spin"></i>&nbsp;&nbsp;&nbsp;<a href="https://facebook.com/king3bady" target="_blank" style="color: inherit; text-decoration: none;">King3BaDy</a></p>
<br/><br/>
<p><i class="fab fa-twitter fa-lg fa-spin"></i>&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/1wyi1" target="_blank" style="color: inherit; text-decoration: none;">1wyi1</a></p>
<br/><br/>
<p><i class="fas fa-envelope fa-lg fa-spin"></i>&nbsp;&nbsp;&nbsp;<a href="mailto:alabade.host@yahoo.com" target="_blank" style="color: inherit; text-decoration: none;">alabade.host@yahoo.com</a></p>
<br/><br/>
<p><i class="fab fa-whatsapp fa-lg fa-spin"></i>&nbsp;&nbsp;&nbsp;<a href="https://api.whatsapp.com/send?phone=201120358412" target="_blank" style="color: inherit; text-decoration: none;">+20 112 035 8412</a></p>


	
	  
	  
	  
	  

	  </div>
	  
	  </div>

	  <!---------------------------------- End Contant --------------------------------->
	  
	  
	  
	  
    </div>
  </div>
  
</div>
</div>


</div>
</div>

</div>
</div>
  
  
  
  
    <!-- Optional JavaScript --> 
    <!-- fontawesome -->
	<script src="https://kit.fontawesome.com/9bb21706df.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>