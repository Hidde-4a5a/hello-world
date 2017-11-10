<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Home | Demo Site</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'dynasite.php'; ?>
</head>
<body class="home-page sidebar-layout">
    <header id="header">
        <h2 class="site-title">Demo Site</h2>
    </header>
    <nav id="main-nav">
        <ul>
            <li class="active"><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="content-container">
        <main id="main-content">
          {{home}}
        </main>
        <aside id="sidebar">
            <section>
                <article>
                    <h3>Some Article</h3>
                    <p>
                        Morbi scelerisque eros viverra tempor pharetra. Aliquam ac ex 
                        vitae eros ultricies condimentum non in justo. Mauris ligula orci,
                        tincidunt quis fermentum interdum, elementum id est. Nunc tempus 
                        tortor magna, mollis imperdiet augue convallis et. Vivamus quis 
                        ipsum accumsan quam dictum pellentesque. Sed varius nisi at dui 
                        placerat, nec vestibulum justo posuere. Aenean semper elit quis 
                        tortor lobortis porta. Suspendisse ac dolor eros.
                    </p>
                </article>

                <article>
                    <h3>Another Article</h3>
                    <p>
                        Nullam vestibulum eleifend congue. Nulla ullamcorper, lacus et 
                        porttitor pellentesque, magna diam varius neque, vitae molestie 
                        nibh nibh eget libero. In dignissim sollicitudin orci, ut lacinia
                        ligula cursus eu. 
                    </p>
                </article>
            </section>
        </aside>
    </div>

    <footer id="footer">
        <p>
            Quisque semper dui in massa maximus, a pharetra sapien molestie. 
            Suspendisse ullamcorper, erat ut rutrum pulvinar, sem libero imperdiet
            dui, id dapibus nisl mauris sit amet libero. Aliquam mollis neque est,
            eget sodales velit faucibus id. Vestibulum pharetra, nulla ac interdum
            iaculis, turpis justo pellentesque nibh, eget cursus massa neque sit
            amet massa.
        </p>
    </footer>
</body>
</html>