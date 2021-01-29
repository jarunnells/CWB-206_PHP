<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: random.php

    [ X ] COMPLETE?
-->
<?php
  define('NAV_LINK', '../basics.php');
  define('BACK', '<< BACK >>');
  class RandomNumbers {
    const ALGORITHMS = array(
      array('NONE', 'ID001', 'ID002', 'ID003'),
      array('--- SELECT ---', 'rand', 'mt_rand', 'random_int')
    );
    public $range_min;
    public $range_max;
    public $output_max;
    public $numbers;
    public $header;
    function __construct(string $algorithm=self::ALGORITHMS[1][1], int $range_min=0, int $range_max=10, int $output_max=10) {
      $this->algorithm = $algorithm;
      $this->range_min = $range_min;
      $this->range_max = $range_max;
      $this->output_max = $output_max;
      $this->numbers = array();
      $this->header = "Random Numbers ($this->output_max) Between (Inclusive): $this->range_min and $this->range_max";
    }
    function generate_numbers() {
      for ($i=0; $i<$this->output_max; $i++) {
        switch ($this->algorithm) {
          case 'rand':
            array_push($this->numbers, rand($this->range_min, $this->range_max));                
            break;
          case 'mt_rand':
            array_push($this->numbers, mt_rand($this->range_min, $this->range_max));
            break;
          case 'random_int':
            array_push($this->numbers, random_int($this->range_min, $this->range_max));
            break;
          default:
            break;
        }
      }
      return $this->numbers;
    }
  }
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/custom.css" />
  <title>Random Numbers | PHP</title>
</head>
<body>
  <!--
  <section>
      Algorithm:
      <select id="algorithms">
          <option value=<?php //echo RandomNumbers::ALGORITHMS[0][0] ?> selected><?php //echo RandomNumbers::ALGORITHMS[1][0] ?></option>
          <option value=<?php //echo RandomNumbers::ALGORITHMS[0][1] ?>><?php //echo RandomNumbers::ALGORITHMS[1][1] ?></option>
          <option value=<?php //echo RandomNumbers::ALGORITHMS[0][2] ?>><?php //echo RandomNumbers::ALGORITHMS[1][2] ?></option>
          <option value=<?php //echo RandomNumbers::ALGORITHMS[0][3] ?>><?php //echo RandomNumbers::ALGORITHMS[1][3] ?></option>
      </select>
  </section>
  -->
  <main>
  <section id="holder">
  <?php $random_numbers = new RandomNumbers(
    $algorithm=RandomNumbers::ALGORITHMS[1][random_int(1,count(RandomNumbers::ALGORITHMS[1])-1)]);
    echo '<h3 id="random_title">' . $random_numbers->header . '</h3>';
    echo '<hr class="title" />';
    foreach ($random_numbers->generate_numbers() as $number) {
      echo '<p class="number">' . $number . '</p>';
    }
    echo '<hr class="algorithm" />';
    echo '<p id="algorithm_used">Algorithm Used: '. $random_numbers->algorithm .'()</p>';
    echo '<hr class="algorithm" />';
    echo '<a href=' . NAV_LINK . ' class="nav_link" target="_self" title="Go To -> basics.php...">' . BACK . '</a>';
  ?>
  </section>
  </main>
</body>
</html>
