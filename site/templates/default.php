<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title() ?></title>
  <?= snippet('auf-style/style'); ?>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1rem;
    }
    * + * {
      margin-top: var(--margin);
    }
    body > * {
      max-width: 80ch;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body class="page page--day-theme">
  
  <h1><?= $page->title() ?></h1>
  
  <p><a href="<?= url('style-tests') ?>"><button class="box box--inverted">Go to Style Tests Page</button></a></p>
  
  <hr>

  <article>
    <h2>Page</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae voluptatem facere libero iusto esse sint tenetur cumque dolorem nemo! Officiis, ex soluta amet itaque possimus eos. Veritatis quia adipisci officia.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique consectetur error doloremque impedit incidunt, vero ipsum harum sed nemo maxime. Soluta minus aut tempora hic corrupti, nemo ipsam laudantium veritatis.</p>
  </article>

  <section class="box">
    <h2>Let´s create a Box</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reiciendis facilis vitae, autem, voluptate libero beatae ullam doloribus a vel deleniti ipsam. Veritatis nam sint culpa deserunt repudiandae natus aliquam.</p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus sequi laborum a quae quidem, quasi obcaecati eaque iure ratione rem atque reprehenderit laudantium temporibus fugit, odio pariatur nostrum nobis possimus.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis earum neque, cum rerum illo commodi labore harum aspernatur blanditiis minus est magni iste expedita quam animi, maiores temporibus ea fuga.</p>

    <section class="box--inverted box ">
      <h2>And a nested box--inverted</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem cumque perferendis eaque impedit dolores, fugiat autem est unde ad facere voluptatum officiis, temporibus expedita tenetur laboriosam ipsam maxime voluptate quod.</p>
    </section>

  </section>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, quasi? Aspernatur eaque dolorem ut consequuntur. Laudantium similique voluptatibus illum velit totam libero, fuga quam minima ut fugiat dolores, error nam.</p>
  
  <section class="box box--safe-text background-theme--2 color-theme--1">
    <h2>Headline</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, quidem. Optio itaque sit ab debitis repellat quaerat, temporibus facilis nemo ad perferendis fuga molestias, vero necessitatibus aliquam voluptate perspiciatis earum?</p>
    <p class="box">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, nulla excepturi officia dolorum non voluptatum pariatur odit beatae itaque laboriosam similique. Enim laboriosam soluta cumque aspernatur obcaecati sequi mollitia ducimus.</p>
  </section>
  
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia mollitia sint quis eveniet quos! Voluptatibus natus accusamus iste, veniam aut similique. Hic natus explicabo dolorum. Molestiae numquam quo a sed?</p>
  
  <section id="test" class="box background-theme--1 flex align-items--center">
    <h2 class="safe-text">Some Bullets</h2>
    <figure>
      <img src="" alt="image in a box">
    </figure>
    <ul class="flex flex-direction--row boxes box--extra-safe-texts">
      <li>1. Dolor molestias, adipisci repudiandae unde asperiores facilis est assumenda nesciunt culpa iste sit quis, cumque vel ipsum labore voluptates consectetur ducimus id?</li>
      <li>2. Fuga nulla vero fugit. Molestias, autem. Provident praesentium dignissimos eaque, neque soluta accusamus beatae animi deleniti doloremque officiis vel iusto ad dicta.</li>
      <li>3. Ipsam nobis reprehenderit esse sit earum voluptates ratione sint vero enim eligendi ipsum, pariatur vel quas, magnam error molestias reiciendis asperiores repellendus.</li>
      <!-- <li>4. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam nobis reprehenderit esse sit earum voluptates ratione sint vero enim eligendi ipsum, pariatur vel quas, magnam error molestias reiciendis asperiores repellendus.</li>
      <li>5. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam nobis reprehenderit esse sit earum voluptates ratione sint vero enim eligendi ipsum, pariatur vel quas, magnam error molestias reiciendis asperiores repellendus.</li> -->
    </ul>
    <button class="safe-text">Click Me Twice!</button>
  </section>

</body>
</html>
