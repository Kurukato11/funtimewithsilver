<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <div class="MyLogo">
            <img src="SilverHi.png" alt="display">
        </div>
    </head>

    <body>
        <header class="header">
            <a href="index.php" class="logo">FunTimeWithSilver.</a>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="FunTimeAbout.php">About</a>
                <a href="FunTimeServices.php">Services</a>
                <a href="FunTimeMyWorks.php">My Works</a>
                <a href="FunTimeContacts.php" class="active">Contacts</a>
            </nav>
        </header>
        <section class="contacts">
            <div class="contact-content">
                <h2>Excited to Work With You!!</h2>
                <div class="contact-wrapper">
                    <div class="contact-form">
                        <h3>Send a message.</h3>
                        <form action="https://api.web3forms.com/submit" method="POST">
                            <input type="hidden" name="access_key" value="67bc0ba3-3c60-4442-9465-48090b8a6584">
                            <div class="form-group">
                                <input type="text" name="Name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                            <div class="form-group">
                                <input type="email" name="Email" placeholder="Your Email" required>
                            </div>
                            <textarea name="message" placeholder="Your Message" required></textarea>  
                        </div>
                        <button type="submit">Send</button>
                        <div class="contact-info">
                            <h3>Contact Information</h3>
                            <p><i class='bx bx-phone'></i>097 0203 9239</p>
                            <p><i class='bx bx-envelope'></i>alexander122villanueva@example.com</p>
                            <p><i class='bx bx-map'></i>Subdivision of Marcopolo, City of Santa Rosa, Laguna, Philippines</p>
                        </div>
                        <div class="contact-sce">
                            <a href="https://www.facebook.com/share/1AoJLnSkHw/" target="_blank"><i class='bx bxl-facebook'></i></a>
                            <a href="https://youtube.com/@funtimewithsilver?si=ZWp_9QXVn1m0Xm-m" target="_blank"><i class='bx  bxl-youtube'  ></i> </a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>