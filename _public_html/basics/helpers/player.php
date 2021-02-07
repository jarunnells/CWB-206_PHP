<?php declare(strict_types=1);
  /********************************************************
   *   DEVELOPER: J.A. Runnells
   *      COURSE: CIS-206-R11
   *      BRANCH: main
   *        FILE: player.php
  ********************************************************/

/**
 * Class Player
 */
  class Player {
    // Properties
    public string $player_first_name;
    public string $player_last_name;
    public null|string $birth_date;
    public string $phone;
    public string $team;
    public string $street;
    public string $city;
    public string $state;
    public string $zip;
    public null|string $parent_first_name;
    public null|string $parent_last_name;

    /**
     * Player constructor.
     * @param string $player_first_name
     * @param string $player_last_name
     * @param string|null $birth_date
     * @param string|null $parent_first_name
     * @param string|null $parent_last_name
     */
    public function __construct(
      string $player_first_name, 
      string $player_last_name, 
      string $birth_date=NULL, 
      string $parent_first_name=NULL, 
      string $parent_last_name=NULL
    ) {
      $this->player_first_name = $player_first_name;
      $this->player_last_name = $player_last_name;
      $this->birth_date = $birth_date;
      $this->parent_first_name = $parent_first_name;
      $this->parent_last_name = $parent_last_name;
    }

    // Player Class Set Methods
    /**
     * @param string $team
     */
    public function set_team(string $team) { $this->team = $team; }

    /**
     * @param string $phone
     */
    public function set_phone(string $phone) { $this->phone = $phone; }

    /**
     * @param string $street
     * @param string $city
     * @param string $state
     * @param string $zip
     */
    public function set_address(
      string $street, 
      string $city='Denver', 
      string $state='CO', 
      string $zip='80203'
    ) {
      $this->street = $street;
      $this->city = $city;
      $this->state = $state;
      $this->zip = $zip;
    }

    // Player Class Get Methods

    /**
     * @param bool $asString
     * @return array|string
     */
    public function get_player_name(bool $asString=false): array|string {
      if ($asString) { return $this->player_first_name . ' ' . $this->player_last_name; } 
      else {
        return array(
          'first'=>$this->player_first_name, 
          'last'=>$this->player_last_name
        );
      }                
    }

    /**
     * @param bool $asString
     * @return array|string
     */
    public function get_parent_name(bool $asString=false): array|string {
      if ($asString) { return $this->parent_first_name . ' ' . $this->parent_last_name; }
      else {
        return array(
          'first'=>$this->parent_first_name, 
          'last'=>$this->parent_last_name
        );
      }                
    }

    /**
     * @return string
     */
    public function get_birth_date(): string { return $this->birth_date; }

    /**
     * @return string
     */
    public function get_team(): string { return $this->team; }

    /**
     * @return string
     */
    public function get_phone(): string { return $this->phone; }

    /**
     * @param bool $asString
     * @return array|string
     */
    public function get_address(bool $asString=false): array|string {
      if ($asString) { return $this->street . ', ' . $this->city . ', ' . $this->state . ' ' . $this->zip; }
      else {
        return array(
            'street'=>$this->street, 
            'city'=>$this->city, 
            'state'=>$this->state, 
            'zip'=>$this->zip
        );
      }
    }
  }

  // Sub Class -> Player := includes parental information

/**
 * Class MinorPlayer
 */
  class MinorPlayer extends Player {
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
    ) {
      parent::__construct($player_first_name, $player_last_name, $birth_date);
      $this->parent_first_name = $parent_first_name;
      $this->parent_last_name = $parent_last_name;
      // parent::get_parent_name();
      $this->get_parent_name();
    }
  }
?>
