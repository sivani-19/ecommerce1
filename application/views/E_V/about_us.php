<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product_display</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<?php echo form_open('about_us');?>
    <form action="<?php echo base_url('about_us');?>" method="post">
    <div class="aboutus">
       <img src="https://cdn.pixabay.com/photo/2017/08/07/19/45/ecommerce-2607114_1280.jpg">
       <p class="text">Toogl promotes their core value of remote working throughout their website and
         their About Us page is a great example of how you can promote your core values too.
          As a core value to their business, their About Us page is focused around this global 
          team and the productivity that they bring to the company. Not only do they put their 
          team front and center, but they share how the team works so that someone interested 
          in applying for a position with the company can be sure they will enjoy working for
           the company before they start.</p>
    </div>
        </form>
    
 
</body>
<style> 
    body{
        text-align: center;
    }
    .aboutus{
        margin: auto;
        margin-top:2rem ;
    }
    .aboutus img{
        width:40%;
        height:20%;
        object-fit:contain;"
    }
    .text{
        width: 70%;
        margin: auto;
        font-size: 1.4rem;
    }
    @media screen and (max-width:478px){ 
        .aboutus{
        margin: auto;
        margin:1rem ;
    }
    .text{
        width: 100%;
        margin: auto;
        font-size: 1.4rem;
    }
    .aboutus img{
        width:80%;
        height:20%;
        object-fit:contain;
    }
    }
    @media screen and (max-width:768px){ 
        .aboutus{
        margin: auto;
        margin:1rem ;
    }
    .text{
        width: 100%;
        margin: auto;
        font-size: 2rem;
    }
    .aboutus img{
        width:80%;
        height:20%;
        object-fit:contain;
    }
    }
</style>
  
</html>