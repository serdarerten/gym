
<!DOCTYPE html>
<html lang="en">
<head>
<title>Paketler</title>
<link rel="shortcut icon" type="image/png" href="img/zyro-image.png"/>
<style>
body{
background-image:url("img/gym7.jpg");
}
</style>
<link rel="stylesheet" href="style3.css">
<header class="container">
<nav> 
<div class="logo">
<img src="img/zyro-image.png" width="100" height="100" alt="logo" />         
</div>
<div class="menu"> 
<ul> 
<li><a href="anasayfa.php">Ev</a></li>
<li><a href="paketler.php">Paketler</a></li>
<li><a href="mailto:serdarertn@gmail.com">İletişim</a></li>
</ul>
</div>
</nav>
</header>
</style>
</head>
<body>


</style>
</head>
<body>

<style>
    /*tablo başlangıç*/
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    color: #f8caed;
    border: 2px #403e5b solid;
}
th, td {
    padding: 5px;
    text-align: left;
} 

form{
width: 300px;
height: 300px;
margin: auto;
padding: 20px;
color: #403e5b;
}

table{
margin-left:auto;
margin-right:auto;
margin-top: 100px;
color: #403e5b;
}

/* tablo bitiş*/

/* button başlangıç*/
.fill {
  position: relative;
  display:block;
  height: 45px;
  width: 150px;
  margin: 10px 7px;
  padding: 5px 5px;
  font-weight: 700;
  font-size: 15px;
  letter-spacing: 2px;
  color: #bf98d7;
  border: 2px #776794 solid;
  border-radius: 4px;
  text-transform: uppercase;
  outline: 0;
  overflow:hidden;
  background: none;
  z-index: 1;
  cursor: pointer;
  transition:         0.08s ease-in;
  -o-transition:      0.08s ease-in;
  -ms-transition:     0.08s ease-in;
  -moz-transition:    0.08s ease-in;
  -webkit-transition: 0.08s ease-in;
}

.fill:hover {
  color: whitesmoke;
}

.fill:before {
  content: "";
  position: absolute;
  background: #776794;
  bottom: 0;
  left: 0;
  right: 0;
  top: 100%;
  z-index: -1;
  
}

.fill:hover:before {
  top: 0;
}
.fill {
margin-left:auto;
margin-right:auto;
position: absolute;
top: 370px;
right: 47px;
left: 50px;
}
/* button bitiş*/



.kutu{
width: 350px;
height:300px;
margin-left:auto;
margin-right:auto;
position: absolute;
top: 150px;
right: 47px;
left: 50px;
background-color: #776794;
border-radius:  50px/30px;
}




   
      

</style>
<div class="kutu"> 
<table class="table table-responsive">
    <thead>
        <tr>
            <th> Paketler</th>
            <th> Günler</th>
            <th> Aylık Fiyat</th>
            
        </tr>
     </thead>
     <tbody>
        <form>
        <tr>
            <td>
                 <div class="radio">
                      <label><input type="radio" name="optradio">GYM</label>
                 </div>
            </td>
            <td>
                 Salı-Çarşamba
            </td>
            <td>
                 100 TL
            </td>
         </tr>
         <tr>
             <td>
                 <div class="radio">
                      <label><input type="radio" name="optradio">BODY</label>
                 </div>
             </td>
             <td>
                Pazartesi-Perşembe
             </td>
             <td>
                  300 TL
            </td>
         </tr>
         <tr>
             <td>
                 <div class="radio">
                      <label><input type="radio" name="optradio">FİTNESS</label>
                 </div>
             </td>
             <td>
                  Salı-Cuma
             </td>
             <td>
                  200 TL
            </td>
         </tr>
         
         </form>
       
<button class="fill">Satın Al</button>
 
        
     </tbody>
 </table>
 </div>


</body>
</html>