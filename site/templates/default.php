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
    }
    * + * {
      margin-top: 1rem;
    }
    body > * {
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>
<body class="page page--day-theme">
  
  <h1><?= $page->title() ?></h1>
  <p><a href="<?= url('style-tests') ?>"><button>Go to Style Tests Page</button></a></p>
  <hr>
  
  <div>
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

      <section class="box box--inverted">
        <h2>And a nested box--inverted</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem cumque perferendis eaque impedit dolores, fugiat autem est unde ad facere voluptatum officiis, temporibus expedita tenetur laboriosam ipsam maxime voluptate quod.</p>
      </section>

    </section>

    <section class="box background-theme--1 flex--start safe-text">
      <h2>Some Bullets</h2>
      <figure>
        <img src="" alt="image in a box">
      </figure>
      <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
      </ul>
      <button>Click Me Twice!</button>
    </section>

  </div>
</body>
</html>
