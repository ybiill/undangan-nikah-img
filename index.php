<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/faticon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farah & Alvian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <main id="main-content" class="main-content" style="display: none;">
        <audio class="hiddenAudio" id="myAudio">
            <source src="audio/Sound.mp3" type="audio/mpeg">
        </audio>

        <!-- Navbar with Floral Decoration -->
        <div class="container-navbar" data-aos="fade-down">
            <nav class="navbar navbar-expand-lg d-flex justify-content-center">
                <div class="container-fluid justify-content-center">
                    <img src="img/header.svg" alt="Centered Logo" class="navbar-flower">
                </div>
            </nav>
        </div>

        <!-- Centered Slider -->
        <div class="container-custom" data-aos="fade-right">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
                style="height: 750px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <div class="map-reseption">
                            <h3 class="text-center">Lokasi Resepsi</h3>
                            <div class="d-flex justify-content-center">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d494.16815724257583!2d113.2013366!3d-7.7531571!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNDUnMTAuNiJTIDExM8KwMTInMDUuNiJF!5e0!3m2!1sid!2sid!4v1725539088448!5m2!1sid!2sid"
                                    width="320" height="400" style="border-radius: 25px;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a class="btn-gmaps" href="https://maps.app.goo.gl/cKMatEbnegrqvYTdA">
                                    Link Google Maps </a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center" style="margin-top: 50px;">
                            <button type="button" class="btn-main" data-bs-toggle="modal"
                                data-bs-target="#inputModal">
                                Tambah Pesan
                            </button>
                        </div>
                        <div class="mt-4">
                            <div class="row" id="dataTable">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Footer with Floral Decoration -->
            <footer class="footer">
                <div class="d-flex justify-content-center">
                    <img src="img/footer.svg" alt="Floral Design" class="floral-design">
                </div>

            </footer>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Input Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formData">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div id="loading-screen" class="loading-screen">

            <div class="curtain-left" id="curtain-left"></div>
            <div class="curtain-right" id="curtain-right"></div>

            <div class="invitation-container">
                <div>
                    <img src="img/main-photo.png" style="width: 550px;" alt="Couple Illustration" />
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card-yth row">
                        <h4>Yth Bapak/Ibu/Saudara/i:</h4>
                        <h4 id="user-name"></h4>
                    </div>
                </div>
                <button id="open-invitation" class="open-invitation">Buka Undangan</button>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var carouselElement = document.querySelector('#carouselExampleFade');
        var carouselInstance = new bootstrap.Carousel(carouselElement, {
            wrap: false // Prevents wrapping around to the opposite end of the carousel
        });

        carouselElement.addEventListener('slid.bs.carousel', function() {
            var totalItems = document.querySelectorAll('#carouselExampleFade .carousel-item').length;
            var currentIndex = document.querySelector('#carouselExampleFade .carousel-item.active').getAttribute('data-bs-slide-to');
            if (parseInt(currentIndex, 10) === totalItems - 1) { // Check if the current index is the last item
                carouselInstance.pause(); // Stop auto cycling
            }
        });
    </script>
    <script>
        document.getElementById('open-invitation').addEventListener('click', function() {

            const curtainLeft = document.getElementById('curtain-left');
            const curtainRight = document.getElementById('curtain-right');
            var audio = document.getElementById('myAudio');

            // Animate curtains to slide to the sides
            curtainLeft.style.transform = 'translateX(-100%)';
            curtainRight.style.transform = 'translateX(100%)';
            // Wait for the animation to finish before showing the main content
            setTimeout(function() {
                document.getElementById('loading-screen').style.display = 'none';
                document.getElementById('main-content').style.display = 'block';
                audio.play();
            }, 1000); // Match the transition duration
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        // Function to Load Data
        function loadData() {
            fetch('process.php?action=read') // Fetch data from server
                .then(response => response.json()) // Parse JSON data
                .then(data => {
                    let cardContent = ''; // Initialize content for cards
                    data.forEach((item, index) => {
                        // Append each item as a Bootstrap card
                        cardContent += `
                            <div class="col-md-4 mb-4">
                                <div class="card-message">
                                    <div class="card-body">
                                        <h5 class="card-title">${item.nama}</h5>
                                        <p class="card-text">${item.pesan}</p>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    document.getElementById('dataTable').innerHTML = cardContent; // Replace with card content
                })
                .catch(error => console.error('Error loading data:', error)); // Error handling
        }

        // Function to Save Data
        document.getElementById('formData').addEventListener('submit', function(e) {
            e.preventDefault();
            let nama = document.getElementById('nama').value;
            let pesan = document.getElementById('pesan').value;

            fetch('process.php?action=create', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        nama,
                        pesan
                    })
                }).then(response => response.json())
                .then(data => {
                    alert(data.message);
                    loadData();
                    document.getElementById('formData').reset();
                });
        });

        // Function to Delete Data
        function deleteData(index) {
            if (confirm('Yakin ingin menghapus data ini?')) {
                fetch(`process.php?action=delete&index=${index}`)
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        loadData();
                    });
            }
        }

        // Function to Edit Data
        function editData(index) {
            let nama = prompt('Masukkan nama baru:');
            let pesan = prompt('Masukkan pesan baru:');
            if (nama !== null && pesan !== null) {
                fetch('process.php?action=update', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            index,
                            nama,
                            pesan
                        })
                    }).then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        loadData();
                    });
            }
        }

        // Load Data on Page Load
        loadData();
    </script>

    <script>
        function getUserFromURL() {
            const path = window.location.pathname; // Get the pathname from the URL
            const pathSegments = path.split('/'); // Split the path by '/'

            // Assuming the URL structure is alvian-farah.com/$user
            let user = pathSegments[pathSegments.length - 1];

            if (user.includes('%')) {
                user = decodeURIComponent(user);
            } // Get the last segment
            console.log(user);

            return user;
        }

        // Function to display the user on the page
        function displayUser() {
            const user = getUserFromURL();
            if (user) {
                document.getElementById('user-name').textContent = user; // Set the user name in the HTML
            } else {
                document.getElementById('user-name').textContent = 'Tamu'; // Default value if user is not found
            }
        }
        window.onload = displayUser;
    </script>
</body>

</html>
<!-- 
<td>
                            <button class="btn btn-warning btn-sm" onclick="editData(${index})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteData(${index})">Delete</button>
                        </td> -->