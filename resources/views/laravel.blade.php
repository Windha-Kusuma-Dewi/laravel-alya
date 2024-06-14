<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portofolio</title>
	<!---custum css link--->
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

<!---google font link--->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-----responsive------>
		<link rel="stylesheet" href="responsive.css">

        <style>@import url('https://fontsgoogleapis.com/css2? family=Poppins:wght@300;400;500;600;700;800;&display=swap');


            *{
              padding: 0;
              margin: 0;
              box-sizing: border-box; 
              font-family: 'Rubik', sans-serif;
              list-style: none;
              text-decoration: none;
              stroke-dashoffset: smooth;
            }
            
            :root{
              --bg-color: #2a2a2a;
              --second-bg-color: #202020;
              --text-color: #a89494;
              --second-color: #c49f9f;
              --main-color: #ffa38d;
              --big-font: 5rem;
              --h2-font:3rem
              --p-font: 1.1rem;
            }
            
            body{
              background: var(--bg-color);
              color: var(--text-color);
            }
            
            header{
              position: fixed;
              width: 100%;
              top: 0;
              right:  0;
              z-index: 1000;
              display: flex;
              align-items: center;
              justify-content: space-between;
              background: transparent;
              padding: 22px 15%;
              border-bottom: 1px solid transparent;
              transition: all .45 ease;
            }
            
            .logo{
              color: var(--text-color);
              font-size: 35px;
              font-weight: 700;
              letter-spacing: 1px;
            }
            
            span{
              color: var(--main-color);
            }
            
            .navlist{
              display: flex;
            }
            
            .navlist a{
              color: var(--text-color);
              font-size: 17px;
              font-weight: 500;
              margin: 0 25px;
              transition: all .45s ease;
            }
            
            .navlist a:hover{
              background: linear-gradient(45deg, #f06, #3cf);
              -webkit-text-fill-color: transparent;
              -webkit-background-clip: text;
            }
            
            .navlist a.acttive{
              background: linear-gradient(45deg, #f06, #3cf);
              -webkit-text-fill-color: transparent;
              /* -webkit-background-clip: text; */
            }
            
            #menu-icon{
              font-size: 35px;
              color: var(--text-color);
              z-index: 1000;
              cursor: pointer;
              margin-left: 25px;
              display: none;
            }
            
            section{
              padding: 160px 15% 120px;
            }
            
            .home{
              position: relative;
              height: 100vh;
              width: 100%;
              background-image: url(img/walpaper.gif);
              background-size: cover;
              background-position: center;
              display: flex;
              align-items: center;
              justify-content: flex-start;
            }
            
            .slide{
              margin-bottom: 20px;
            }
            
            .one{
              display: inline-block;
              margin-right: 15px;
              padding: 0 15px;
              line-height: 32px;
              font-size: 20px;
              font-weight: 500;
              border-radius: 5px;
              background: var(--main-color);
             color: var(--text-color);
            }
            
            .two{
              display: inline-block;
              color: var(--second-color);
              font-size: 20px;
              font-weight: 500;
            }
            
            .home-text h1{
              font-size: 4rem;
              font-weight: 700;
              color: var(--text-color);
              line-height: 1.1;
              margin: 0 0 8px;
            }
            
            .home-text h3{
              color: var(--text-color);
              margin: 0 0 35px;
              font-size:  3rem;
              font-weight: 700;
              line-height: 1.1;
            }
            
            .home-text p{
              color: var(--second-color);
              font-size: var(--p-font);
              line-height: 1.8;
              margin-bottom: 40px;
            }
            
            .button{
              display: inline-block;
              align-items: center;
              justify-content: center;
            }
            
            .btn{
              display: inline-block;
              padding: 12px;
              background: linear-gradient(45deg, #f06, #3cf);
              -webkit-text-fill-color: transparent;
              -webkit-background-clip: text;
              border-radius: 5px;
              color: var(--text-color);
              font-size: 1rem;
              letter-spacing: 1px;
              font-weight: 500;
              transition: all .45 ease;
            }
            
            .btn:hover{
              transform: scale(1.1);
            }
            
            .about{
              position: relative;
              height: 100vh;
              width: 100%;
              background-image: url(img/pepe.webp);
              background-size: cover;
              background-position: center;
              display: flex;
              align-items: center;
              justify-content: flex-start;
            }
            
            .about-img img{
              max-width: 530px;
              height: auto;
              width: 100%;
              border-radius: 5px;
            }
            
            .about-text h2{
              font-size: 45px;
              line-height: 1;
            }
            
            .about-text h4{
              font-size: 24px;
              font-weight: 600;
              color: var(--text-color);
              line-height: 1.7;
              margin: 15px 0 30px;
            }
            
            .about-text p{
              color: var(--second-color);
              font-size: var(--p-font);
              font-family: cursive;
              line-height: 1.8;
              margin-bottom: 4rem;
            }
            
            .contact{
              background: var(--second-bg-color);
              display: grid;
              grid-template-columns: repeat(2, 1fr);
              align-items: center;
              gap: 2.5rem;
            }
            
            .contact-text h4{
              color: var(--text-color);
              margin: 18px 0;
              font-size: 20px;
              font-weight: 600;
            }
            .contact-text h2{
              font-size: var(--second-color);
              line-height: 1;
            }
            
            .list{
              margin-bottom: 2.8rem;
            }
            
            .list li{
              margin-bottom: 12px;
            }
            
            .list li a{
              display: block;
              color: var(--second-color);
              font-size: 14px;
              transition: all.45s ease;
            }
            
            .list li a:hover{
              color: var(--text-color);
              transform: translateY(5px);
            }
            
            .contact-icon i{
              height: 45px;
              width: 45px;
              color: var(--text-color);
              font-size: 22px;
              display: inline-block;
              align-items: center;
              justify-content: center;
              border-radius: 8px;
              margin-right: 15px;
              transition: all .45s ease;
            }
            
            .contact-icon i:hover{
              background: var(--text-color);
              color: var(--main-color);
            }
            
            .contact-form form{
              position: relative;
            }
            
            .contact-form input, form textarea{
              width: 100%;
              padding: 14px;
              background: var(--bg-color);
              color: var(--text-color);
              border: none;
              outline: none;
              font-size: 15px;
              border-radius: 8px;
              margin-bottom: 10px;
            }
            
            .contact-form textarea{
              resize: none;
              height: 240px;
            }
            
            .contact-form .submit{
              display: inline-block;
              font-size: 16px;
              background: var(--main-color);
              width: 160px;
              transition: all .45s ease;
            }
            
            .contact-form .submit:hover{
              transform: scale(1.1);
              cursor: pointer;
            }
            
            .end{
              padding: 20px 15%;
              display: flex;
              flex-wrap: wrap;
              align-items: center;
              justify-content: space-between;
              gap: 2rem;
              background: linear-gradient(45deg, #f06, #3cf);
              -webkit-text-fill-color: transparent;
              -webkit-background-clip: text;
            }
            
            .top i{
              padding: 10px;
              border-radius: 8px;
              font-size: 15px;
              color: var(--text-color);
              background: var(--main-color);
            
            }</style>
</head>
<body>
	<!--Header section-->
	<header>
		<a href="#" class="logo">portofolio</a>
		<ul class="navlist">
			<li><a href="#home" class="active">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#contact">contact</a></li>			
		</ul>
		<div class="bx bx-menu" id="menu-icon"></div>
	</header>
<!---- home section---->
	<section class="home" id="home">
		<div class="home-text">
			<div class="slide">
					<span class="one">Hello</span>
					<span class="two">I'm</span>
			</div>
					<h1>Alya Nurcahya Pratiwi</h1>
					<h3>Student</h3>
					<p>I am a student from of Wikrama Vocational Hight School</p>
			<div class="button">
					<a href="#" class="btn">About Me</a>
			</div>
		</div>
	</section>

<!-------about section------->
	<section class="about" id="about">
		</div>

		<div class="about-text">
				<h2>About <span>Me</span></h2>
				<p>I am a Wikrama Vocational School student majoring in software and game development, I am a young web creator</p>

		</div>
	</section>

<!-----contact section-------->
	<section class="contact" id="contact">

		<!-- <div class="about2.jpg"> -->
			<!-- <img src="img/awan.jpg"> -->
		</div>

		<div class="main-text">
			<h2>Contact<span>Me!</span></h2>
				<h4>if you follow me</h4>
				<p>isi dlu pake apa aja lagi di coba</p>
				<div class="list">
					<li><a href="https://mail.google.com/mail/u/0/#inbox">alyanurcahya@gmail.com</a></li>
					
				</div>
				<div class="contact-icon">
					<a href="https://www.instagram.com/lyaachya_/"><i class='bx bxl-instagram'></i></a>
					<a href="#"><i class='bx bxl-twitter'></i></a>
				</div>

		</div>
				<div class="contact-form">
						<form action="">
							<label for="name">
								<input type="name" placeholder="Your Name" required>
								<input type="email" placeholder="Your Email" required>
								<input type="number" placeholder="Your Mobile Number" required>
								<textarea name="" id="" cols="35" rows="10" placeholder="what are your interests?" required></textarea>
								<input type="submit" value="Send Message" class="submit" required>
							</label>
						</form>

				</div>

				
			
	</section>

<!------end section------->
<section class="end">
		<div class="last-text">
			<p>Desingn By Layaa</p>
		</div>
		<div>
			<a href="#home"><i class='bx bx-up-arrow-alt'></i></i></a>
		</div>
</section>

</body>
</html>