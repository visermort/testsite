<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Страница ученика LoftSchool</title>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5shiv.js"></script>
<![endif]-->
<?php require_once("bin/readdata.php");  ?>
<link  rel="stylesheet" href="css/styles.css">
</head>
<body class="home">
    <div class="page-wrapper">
			<header>
                <nav>
                  <a class="logolink" href="http://loftschool.ru" title="LoftSchool" target="_blank">
                       <img src="images/logo.png" alt="" /> 
                           </a>      
			     <div class="social">
                    <ul>
                         <li>  <a class="vk" 
                            href="http://vk.com/share.php?url=<?php echo getAurAdress();?>" 
                            title="Поделиться в ВКонтакте" target="_blank">  
                              </a> </li>   
                         <li> <a class="twitter" 
                             href="http://twitter.com/home?status=<?php echo getAurAdress();?>" 
                             title="Добавить в Twitter" target="_blank">
                             </a></li>   
                         <li> <a class="facebook" 
                            href="http://www.facebook.com/sharer.php?u=<?php echo getAurAdress();?>" 
                            title="Поделиться в Facebook" target="_blank">   
                            </a> </li>   
                         <li> <a class="github" href="http://gitfub.com" title="Перейти на GitHub" target="_blank">   </a> </li>   
                     </ul>
			      </div>
                 </nav>
			</header>
		    <div class="mainpart">
		         <aside>
                     <ul class="mainmenu">
                     		<li> <a class="homelink" href="index.php">Обо мне</a></li>
                    		<li> <a class="portfoliolink" href="portfolio.php">Мои работы</a></li>
                    		<li> <a class="contactslink disabled" href="#">Связаться со мной</a></li>
                     </ul>     
		         </aside>
		         <div class="content">
                        <article>
                        	<h2>Опыт работы</h2>
                            <?php getworks()?>	
                        </article>
                        <article>
                        	<h2>Образование</h2>
                            <?php getstudy() ?>
                        </article>
		         </div>	
		    </div>
           
    <div class="page-buffer"></div>     
    </div>
		    <footer>
                <div class="footertext" >
		    	<p>&copy; 2015. Это мой сайт. Пожалуйста, не копируйте и не воруйте его</p>
                </div>		    
            </footer>

</body>
</html>
