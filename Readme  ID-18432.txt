-Web assignment- 
student ID-18432         NAME- NGTC Yasarathana

-Hotel Rooms page-

-HTML PART-

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- custom css -->
    <link rel="stylesheet" href="index2.CSS">
    <link rel="stylesheet" href="css/style.css">
    <!-- google fonts -->
    <link rel="stylesheet" href="css/fonts.css">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- slick css -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!-- animate on scroll -->
    <link rel="stylesheet" href="css/aos.css">
</head>

<body>


    <!-- room -->
    <section id="Room" class="Room section-py">
        <div class="container">
            <!-- title -->
            <div class="title">
                <h1>Check our rooms</h1>

            </div>
            <!-- end of title -->

            <div class="Room-wrapper" data-aos="fade-up">
                <!-- item -->
                <div class="Room-item">
                    <div class="Room-item-img">
                        <img src="images/Room 1.jpg" alt="Room1 image">
                        <div class="Room-overlay">
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <div class="Room-icons">
                            </div>
                        </div>
                    </div>
                    <div class="Room-item-footer">
                        <h2>Master room</h2>
                        <h3>Per Day-Rs.10000</h3>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="Room-item">
                    <div class="Room-item-img">
                        <img src="images/Room 2.jpg" alt="Room2 image">
                        <div class="Room-overlay">
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <div class="Room-icons">

                            </div>
                        </div>
                    </div>
                    <div class="Room-item-footer">
                        <h2>Mini suite Room</h2>
                        <h3>Per Day-Rs.20000</h3>
                    </div>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class="Room-item">
                    <div class="Room-item-img">
                        <img src="images/Room 3 (1).jpg" alt="Room3 image">
                        <div class="Room-overlay">
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <div class="Room-icons">

                            </div>
                        </div>
                    </div>
                    <div class="Room-item-footer">
                        <h2>Luxury Room</h2>
                        <h3>Per Day-Rs.30000</h3>
                    </div>
                </div>
                <!-- end of item -->
            </div>
        </div>
    </section>
    <!--- end of Room -->


    <!-- jQuery -->
    <script src="js/jquery-3.5.1.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>

    <!-- animate on scroll -->
    <script src="js/aos.js"></script>

</body>

</html>





-CSS PART-


:root{
    --persian-red: #ce3232;
    --dark: #363636;
    --grey: #bfbdbd;
    --lightGrey: #f9f9f9;
    --transition: all 0.5s ease;
    --Poppins: 'Poppins', sans-serif;
    --Mont: 'Montserrat', sans-serif;
}

*{
    box-sizing: border-box;
}
body{
    font-family: var(--Mont);
}

/* Utilities */
a{
    color: var(--dark);
    text-decoration: none;
}
ul li{
    list-style-type: none;
}
img{
    width: 100%;
    display: block;
}
button{
    font-family: inherit;
    outline: none;
}
h1, h2, h3, h4, h5, h6, p{
    margin: 1.2rem 0;
}
.btn{
    background: var(--persian-red);
    border: none;
    color: #fff;
    text-transform: capitalize;
    font-size: 0.95rem;
    padding: 0.7rem;
    display: block;
    transition: var(--transition);
    cursor: pointer;
}
.btn:hover{
    background: var(--dark);
}
.container{
    width: 90vw;
    margin: 0 auto;
}
.section-py{
    padding: 5rem 0;
}
.para-text{
    color: var(--dark);
    line-height: 1.7;
    font-size: 0.95rem;
    opacity: 0.8;
}

/* Room */
.Room{
    background: var(--lightGrey);
}
.Room .title{
    text-align: center;
}
.Room-wrapper{
    margin: 2rem 0;
}
.Room-item-img{
    position: relative;
    overflow: hidden;
    cursor: pointer;
}
.Room-item-img img{
    transition: var(--transition);
}
.Room-item-img img:hover{
    transform: scale(1.2);
}
.Room-overlay{
    position: absolute;
    background: rgba(0, 0, 0, 0.8);
    bottom: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    transform: translateY(100%);
    transition: transform 0.6s ease-in-out 0.3s;
}
.Room-overlay p{
    font-weight: 700;
    font-size: 1.2rem;
    width: 70%;
    text-align: center;
    line-height: 1.7;
}
.Room-icons{
    display: flex;
}
.Room-icons span{
    background: var(--dark);
    margin: 0.5rem;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    font-size: 1.3rem;
    display: flex;
    justify-content: center;
    align-items: center;
    color: var(--lightGrey);
    transition: var(--transition);
}
.Room-icons span:hover{
    background: var(--persian-red);
}
.Room-item-img:hover .chef-overlay{
    transform: translateY(0);
}
.Room-item-footer{
    text-align: center;
    padding: 0.8rem;
}
.Room-item-footer h2{
    font-size: 1.4rem;
    color: var(--dark);
}
.Room-item-footer h3{
    color: var(--grey);
    text-transform: uppercase;
    font-size: 0.9rem;
}



/* # Media Queries # */


   

    .Room-wrapper{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 1.5rem;
    }
    



}



THANK YOU !