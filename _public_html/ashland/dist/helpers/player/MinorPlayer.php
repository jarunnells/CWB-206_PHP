<?php declare(strict_types=1);
  /******************************************************
   *   DEVELOPER: J.A. Runnells
   *      COURSE: CIS-206-R11
   *      BRANCH: main
   *        FILE: MinorPlayer.php -> extends Player.php
   ******************************************************/

  /**
   * Class MinorPlayer
   */
  class MinorPlayer extends Player
  {
    private string $parent_first_name;
    private string $parent_last_name;

    /**
     * MinorPlayer constructor.
     * @param string $player_first_name
     * @param string $player_last_name
     * @param string $birth_date
     * @param string $parent_first_name
     * @param string $parent_last_name
     */
    public function __construct(
      string $player_first_name,
      string $player_last_name,
      string $birth_date,
      string $parent_first_name,
      string $parent_last_name
    )
    {
      parent::__construct($player_first_name, $player_last_name, $birth_date);
      $this->parent_first_name = $parent_first_name;
      $this->parent_last_name = $parent_last_name;
    }

    /**
     * @param string $parent_first_name
     * @param string $parent_last_name
     */
//    public function set_parent_name(string $parent_first_name, string $parent_last_name): void
//    {
//      $this->parent_first_name = $parent_first_name;
//      $this->parent_last_name = $parent_last_name;
//    }

    /**
     * @param bool $asString
     * @return array|string
     */
    public function get_parent_name(bool $asString = false): array|string
    {
      if ($asString) {
        return $this->parent_first_name . ' ' . $this->parent_last_name;
      } else {
        return [
          'first' => $this->parent_first_name,
          'last' => $this->parent_last_name
        ];
      }
    }
  }
