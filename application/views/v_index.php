<!DOCTYPE html> 
 
<head> 
    <meta charset="utf-8"> 
    <title>12.3A.04 | Simple Web Template</title> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css"> 
</head> 

<body> 
    <div id="wrapper"> 
        <header> 
            <hgroup> 
                <h1>Simple Web Template</h1> 
                <h3>Test Template Sederhana</h3> 
            </hgroup> 
            <nav>
                <ul> 
                    <li><a href="<?php echo base_url() . 'index.php/web' ?>">Home</a></li> 
                    <li><a href="<?php echo base_url() . 'index.php/web/about' ?>">About</a></li> 
                </ul> 
            </nav> 
            <div class="clear"></div> 
        </header>
        <section> 
            <h1><?php echo $judul ?>
            <p> 
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi itaque ratione qui ipsam molestias esse temporibus ullam
                repellendus labore impedit minima quasi, autem facilis fugit repudiandae quod? Dicta assumenda reiciendis ducimus commodi
                minima vero blanditiis doloribus praesentium necessitatibus. Hic dignissimos voluptatibus eum enim doloribus. Vel porro sunt
                facilis perspiciatis distinctio! 
                Lorem ipsum sit amet consectetur adipisicing elit. Dolore repellendus placeat, voluptatum ducimus quaerat, optio 
                magnam dolorem est in corporis minus, suscipit vel at voluptatibus.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia adipisci sit autem, voliptateminventore repellat ipsam
                ducimus reiciendis iusto quibusdam totam eos consequuntur modi, laborum laboriosam dolorem! Porro, amet.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam porro voluptatibus commodi voluptates maxime, natus expedita
                aut veniam. Quo quasi ipsum corrupti. Veniam eaque velit unde odio facilis ratione dolorem!
                magnam a, labore quas natus minus libero provident numquam rapellat aspernatur amet facilis inventore nobis aliquid
                porro modi beatae ipsam error voluptas odit, earum quidem blanditiis! Eos sunt animi sapiente adipisci optio similique. 
            </p>
        </section>
        <footer>
            <a href="bsi.ac.id">Web By Me</a>
        </footer>
    </div>
</body>
</html>