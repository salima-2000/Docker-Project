<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Liste des universités</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <style>
        *,
*::before,
*::after { 
  box-sizing: border-box;
}
body {
  color: white;
  font-family: 'Roboto','Helvetica Neue', Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

 
.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  width:95%;
  margin-left:auto;
  margin-right: auto;
  padding: 0;
  margin-top:30px;
}

.cards__item {
  display: flex;
  padding: 2rem;
  width:32%;
  @media(min-width: 40rem) {
    width: 50%;
  }
  @media(min-width: 56rem) {
    width: 33.3333%;
  }
  
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0,0,0,0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;

  
}

.card__content {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  padding: 1rem;
}

.card__image {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  filter: contrast(70%);
  filter: saturate(180%);
  overflow: hidden;
  position: relative;
  transition: filter 0.5s cubic-bezier(.43,.41,.22,.91);;
 
  @media(min-width: 40rem) {
    &::before {
      padding-top: 66.6%; // 3:2 aspect ratio
    }
  }
}

.card__image--flowers {
  background-image: url(https://unsplash.it/800/600?image=82);
}

.card__image--river {
  background-image: url(https://unsplash.it/800/600?image=11);
}

.card__image--record {
  background-image: url(https://unsplash.it/800/600?image=39);
}

.card__image--fence {
  background-image: url(https://unsplash.it/800/600?image=59);
}

.card__title {
  color: #696969;
  font-size: 1.25rem;
  font-weight: 300;
  letter-spacing: 2px;
  text-transform: uppercase;
}

.card__text {
  flex: 1 1 auto;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
  color:#2283AC;
  font-weight: bold;
}
.bton {
    display: block;
    width:300px;
    height:45px;
    font-size: 20px;
    color: white;
    background: #2283AC;
    outline: none;
    border: none;
    cursor: pointer;
    border-radius: 50px;
    box-shadow: 0 6px #e4e0d9;
    margin-left: auto;
    margin-right: auto;
    position:relative;
    right:40px;
    top:10px;
    
}
.search__container{
  position:relative;
  top:-3px;
}

.search__input{
        width: 35%;
        height: 45px;
        background-color: #E5E5E5;
        font-size: 15px;
        color: #575756;
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='28' viewBox='0 0 24 24'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-size: 18px 18px;
        background-position: 95% center;
        border-radius: 50px;
        border: 0px ;
        outline: 0;
        
  }    
 
  .search__input:hover{
    outline: 0;
  }
  h1{
    color:#2283AC;
    text-align:center;
    position:relative;
    top:-50px;
  }
  h5{
    color:#2283AC;
    font-weight:bold;
  }
.form > input {
  text-align: center;
  width: 40%;
  margin-left:auto;
  margin-right:auto;
}
.form-field {
  height: 46px;
  padding: 0 16px;
  border: 2px solid #ddd;
  border-radius: 4px;
  font-family: 'Rubik', sans-serif;
  outline: 0;
  transition: .2s;
  margin-top: 20px;
}

.form-field:focus {
  border-color: #0f7ef1;
}
label{
  color:grey;
  width:300px;
  margin-right:auto;
  margin-left:auto;
}
.btn{
    width:180px;
    height:40px;
    font-size: 20px;
    color: white;
    background: #2283AC;
    outline: none;
    border: none;
    cursor: pointer;
    border-radius: 50px;
    box-shadow: 0 6px #e4e0d9;
    position:relative;
    left:550px;
  
}
.btn:hover{
  color: white;
}
.formulaire{
  width:60%;
  box-shadow:grey 2px;
  border: 1px grey solid;
  padding:10px;
  padding-bottom:20px;
}
.btn-upload{
  background-color: #fff;
  color: grey;
  padding: 10px 25px;
  border-radius: 10px;
  font-size: 20px;
}
      </style>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   </head>
   <body>
   <?php if(isset($_Session['success'])){?>
    <div class="alert alert-success" role="alert">
<button type="button" class="close" data-dismiss="alert">x</button>
<?php echo $_SESSION['success']; ?>
</div>
    <?php }?>

    <?php if(isset($_Session['error'])){?>
    <div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert">x</button>
<?php echo $_SESSION['error']; ?>
</div>
    <?php }?>

    <img src="logo_docker.PNG" alt="logo_projet">
    <h1>La liste des universités au Maroc</h1>
    <div  class="search__container">
      <input style="margin-left: 30%; padding-left:35px;" class="search__input" type="text" placeholder="Chercher une université">
    </div> 
    <?php
       //recuperer le fichier json
       $Json = file_get_contents("file.json");
       //convertir en tableau
       $myarray = json_decode($Json, true);
       ?>
       <ul class="cards">
       <?php
      foreach($myarray as $elem){?>
         <li class="cards__item">
        <div class="card">
          <div class="card__image card__image--fence"><img src="<?php echo $elem["image"];?>"></div>
          <div class="card__content">
            <div class="card__title"><?php echo $elem["name"] ;?></div>
            <p class="card__text"><?php echo $elem["domaine"];?></p>
           
          </div>
        </div>
      </li>
      <?php } ?>
      </ul>
    
    <div >
      <button class="bton" type="button"> Voir Plus >>></button>
      </div>
      <br>
      <br>
      <br>
      <div class="formulaire"> 
      
        <h5>
          Ajouter une université
        </h5>
        <form enctype="multipart/form-data" method="POST" action="traiterForm.php">
          <div>
          <label for="name">Le nom de l'université :</label>
          <input  name="name" class="form-field" type="text">
         </div>
         <div>
          <label for="domaine">Le domaine de l'université :</label>
          <input name="domaine" class="form-field" type="text">
         </div>
         <br>
         <br>
         <div>
          <label for="image">l'image de l'université :</label>
          <input name="image" class="btn-upload" type="file">
        </div>
          <button class="btn" type="submit"> Enregistrer </button>
        </form>
      </div>
   </body>
</html>