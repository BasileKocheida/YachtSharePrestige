<?php
include "../partials/header.php";
?>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44538.56927924458!2d4.800101632794151!3d45.75795015089985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea516ae88797%3A0x408ab2ae4bb21f0!2sLyon!5e0!3m2!1sfr!2sfr!4v1618313817672!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class=search>
    <div class=search-input-1>
        <div class="search-input">
            <input type="text" id="destination" name="destination" placeholder="Destination">
            <input type="text" id="destination" name="destination" placeholder="Date d'arriver">
            <input type="text" id="destination" name="destination" placeholder="Date de départ">
            <input type="text" id="destination" name="destination" placeholder="Taille du bateau">
            <button>Rechercher</button>
        </div>
    </div>
    <div class="title">
        <h2>Résultats de votre recherche</h2>
        <h5>ou voir tous les Yachts disponibles</h5>
    </div>

    <div class="filter">
        <h3>Filtrer<br> la selection</h3>
        <Select name="size">
            <option> TAILLE DU BATEAU</option>
            <option>10 Meters</option>
            <option>30 Meters</option>
        </Select>
        <Select name="point">
            <option>POINT D'ACHAT</option>
            <option>Nice</option>
            <option>Cannes</option>
        </Select>
        <Select name="pers">
            <option>Pers. A BORD</option>
            <option>10 pers.</option>
            <option>12 pers.</option>
        </Select>
        <select>
            <option>DISPONIBILITÉ</option>
        </select>
    </div>
    <div class="search-result">


        <div class="col-9">
            <div class='col-content'>

                <?php

                for ($i = 0; $i < 12; $i++) {

                    echo "<div class='carte'>
                                <div class='divImg'>
                                    <img src='/assets/images/bg.jpg'>
                                </div>
                                <div class='titre'>
                                    Nom du Yacht - 42 mètres
                                    <hr>
                                </div>
                            <div class='tab min'>
                                <span>Disponible ✅</span>
                            </div>
                            
                            <div class='info'>
                                <p>Lorem ipsum dolor sit amet, consecte Conuibusdam eveniet non sunt. Veniam, aperiam.</p>
                            </div>

                            <div class='btnSection'>
                                <p>👥 12</p> <p> port d'attache</p>
                                <button>Book</button>
                            </div>
                        </div>";
                } ?>
            </div>
        </div>

        <div class="sideBar col-12 col-3@md">
            <div class='col-content'>

                <div class="sideBar-content  sideBar-content-1">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A rerum, voluptatum repellat, accusantium enim id iure nesciunt neque atque deserunt fuga veniam officia nostrum, amet quam fugit illo reiciendis quasi.</p>

                </div>
                <div class="sideBar-content sideBar-content-2">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A rerum, voluptatum repellat, accusantium enim id iure nesciunt neque atque deserunt fuga veniam officia nostrum, amet quam fugit illo reiciendis quasi.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="search-actu">
        <div class="title-actu">
            <h2>Les actualités</h2>
            <h5>Voir toute l'actu</h5>
        </div>
        <div class="carousel-actu">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-around">
                            <div class='carte'>
                                <div class='divImg'>
                                    <img src='/assets/images/bg.jpg'>
                                </div>
                                <div class='titre'>
                                    Nom du Yacht - 42 mètres
                                    <hr>
                                </div>
                                <div class='tab min'>
                                    <span>Disponible ✅</span>
                                </div>

                                <div class='info'>
                                    <p>Lorem ipsum dolor sit amet, consecte Conuibusdam eveniet non sunt. Veniam, aperiam.</p>
                                </div>

                                <div class='btnSection'>
                                    <p>👥 12</p>
                                    <p> port d'attache</p>
                                    <button>Book</button>
                                </div>
                            </div>
                            <div class='carte'>
                                <div class='divImg'>
                                    <img src='/assets/images/bg.jpg'>
                                </div>
                                <div class='titre'>
                                    Nom du Yacht - 42 mètres
                                    <hr>
                                </div>
                                <div class='tab min'>
                                    <span>Disponible ✅</span>
                                </div>

                                <div class='info'>
                                    <p>Lorem ipsum dolor sit amet, consecte Conuibusdam eveniet non sunt. Veniam, aperiam.</p>
                                </div>

                                <div class='btnSection'>
                                    <p>👥 12</p>
                                    <p> port d'attache</p>
                                    <button>Book</button>
                                </div>
                            </div>
                            <div class='carte'>
                                <div class='divImg'>
                                    <img src='/assets/images/bg.jpg'>
                                </div>
                                <div class='titre'>
                                    Nom du Yacht - 42 mètres
                                    <hr>
                                </div>
                                <div class='tab min'>
                                    <span>Disponible ✅</span>
                                </div>

                                <div class='info'>
                                    <p>Lorem ipsum dolor sit amet, consecte Conuibusdam eveniet non sunt. Veniam, aperiam.</p>
                                </div>

                                <div class='btnSection'>
                                    <p>👥 12</p>
                                    <p> port d'attache</p>
                                    <button>Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-around">
                            <div class='carte'>
                                <div class='divImg'>
                                    <img src='/assets/images/bg.jpg'>
                                </div>
                                <div class='titre'>
                                    Nom du Yacht - 42 mètres
                                    <hr>
                                </div>
                                <div class='tab min'>
                                    <span>Disponible ✅</span>
                                </div>

                                <div class='info'>
                                    <p>Lorem ipsum dolor sit amet, consecte Conuibusdam eveniet non sunt. Veniam, aperiam.</p>
                                </div>

                                <div class='btnSection'>
                                    <p>👥 12</p>
                                    <p> port d'attache</p>
                                    <button>Book</button>
                                </div>
                            </div>
                            <div class='carte'>
                                <div class='divImg'>
                                    <img src='/assets/images/bg.jpg'>
                                </div>
                                <div class='titre'>
                                    Nom du Yacht - 42 mètres
                                    <hr>
                                </div>
                                <div class='tab min'>
                                    <span>Disponible ✅</span>
                                </div>

                                <div class='info'>
                                    <p>Lorem ipsum dolor sit amet, consecte Conuibusdam eveniet non sunt. Veniam, aperiam.</p>
                                </div>

                                <div class='btnSection'>
                                    <p>👥 12</p>
                                    <p> port d'attache</p>
                                    <button>Book</button>
                                </div>
                            </div>
                            <div class='carte'>
                                <div class='divImg'>
                                    <img src='/assets/images/bg.jpg'>
                                </div>
                                <div class='titre'>
                                    Nom du Yacht - 42 mètres
                                    <hr>
                                </div>
                                <div class='tab min'>
                                    <span>Disponible ✅</span>
                                </div>

                                <div class='info'>
                                    <p>Lorem ipsum dolor sit amet, consecte Conuibusdam eveniet non sunt. Veniam, aperiam.</p>
                                </div>

                                <div class='btnSection'>
                                    <p>👥 12</p>
                                    <p> port d'attache</p>
                                    <button>Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                            <div class='carte'>
                                <div class='divImg'>
                                    <img src='/assets/images/bg.jpg'>
                                </div>
                                <div class='titre'>
                                    Nom du Yacht - 42 mètres
                                    <hr>
                                </div>
                                <div class='tab min'>
                                    <span>Disponible ✅</span>
                                </div>

                                <div class='info'>
                                    <p>Lorem ipsum dolor sit amet, consecte Conuibusdam eveniet non sunt. Veniam, aperiam.</p>
                                </div>

                                <div class='btnSection'>
                                    <p>👥 12</p>
                                    <p> port d'attache</p>
                                    <button>Book</button>
                                </div>
                            </div>
                            <div class='carte'>
                                <div class='divImg'>
                                    <img src='/assets/images/bg.jpg'>
                                </div>
                                <div class='titre'>
                                    Nom du Yacht - 42 mètres
                                    <hr>
                                </div>
                                <div class='tab min'>
                                    <span>Disponible ✅</span>
                                </div>

                                <div class='info'>
                                    <p>Lorem ipsum dolor sit amet, consecte Conuibusdam eveniet non sunt. Veniam, aperiam.</p>
                                </div>

                                <div class='btnSection'>
                                    <p>👥 12</p>
                                    <p> port d'attache</p>
                                    <button>Book</button>
                                </div>
                            </div>
                            <div class='carte'>
                                <div class='divImg'>
                                    <img src='/assets/images/bg.jpg'>
                                </div>
                                <div class='titre'>
                                    Nom du Yacht - 42 mètres
                                    <hr>
                                </div>
                                <div class='tab min'>
                                    <span>Disponible ✅</span>
                                </div>

                                <div class='info'>
                                    <p>Lorem ipsum dolor sit amet, consecte Conuibusdam eveniet non sunt. Veniam, aperiam.</p>
                                </div>

                                <div class='btnSection'>
                                    <p>👥 12</p>
                                    <p> port d'attache</p>
                                    <button>Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


</div>

<?php
include "../partials/footer.php";
?>