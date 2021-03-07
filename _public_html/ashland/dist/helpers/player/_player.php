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
  class PlayerTest {
    // Properties
    private string $player_first_name;
    private string $player_last_name;
    private ?string $birth_date;
    private string $phone;
    private string $team;
    private string $street;
    private string $city;
    private string $state;
    private string $zip;
    private static int $counter = 0;

    /**
     * Player constructor.
     * @param string $player_first_name Player's first name
     * @param string $player_last_name Player's last name
     * @param string|null $birth_date Player's birthdate
     */
    public function __construct(
      string $player_first_name, 
      string $player_last_name, 
      string $birth_date=null
    ) {
      $this->player_first_name = $player_first_name;
      $this->player_last_name = $player_last_name;
      $this->birth_date = $birth_date;
      self::$counter++;
    }

    // Player Class Set Methods -----------------------------------------------

    /**
     * Set Player's Team Assignment
     * @param string $team Player's team assignment
     */
    public function set_team(string $team) { $this->team = $team; }

    /**
     * Set Player's Phone Number
     * @param string $phone Player's phone number
     */
    public function set_phone(string $phone) { $this->phone = $phone; }

    /**
     * Set Player's Address (FULL)
     * @param string $street Player's street address
     * @param string $city Player's city
     * @param string $state Player's state (two letter abbreviations)
     * @param string $zip Player's zipcode (zip or zip+4 valid)
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

    // Player Class Get Methods -----------------------------------------------

    /**
     * Get Player's FULL Name
     * @param bool $asString Boolean flag -> output full name as string [object=>(default)]
     * @return array|string Returns Player's FULL name as concatenated string OR iterable (associative=>array)
     */
//    public function get_player_name(bool $asString=false): array|string {
    public function get_player_name(bool $asString=false) {
      if ($asString) { return $this->player_first_name . ' ' . $this->player_last_name; } 
      else {
        return [
          'first'=>$this->player_first_name, 
          'last'=>$this->player_last_name
        ];
      }                
    }

    /**
     * Get Player's Birthdate
     * @return string Returns player's birthday as a string
     */
    public function get_birth_date(): string { return $this->birth_date; }

    /**
     * Get Player's Assigned Team
     * @return string Returns player's assigned team as string
     */
    public function get_team(): string { return $this->team; }

    /**
     * Get Player's Phone Number
     * @return string Returns player's phone number
     */
    public function get_phone(): string { return $this->phone; }

    /**
     * Get Player's Address (FULL)
     * @param bool $asString Boolean flag -> output full address as string [object=>(default)]
     * @return array|string Returns Player's FULL address as concatenated string OR iterable (associative=>array)
     */
//    public function get_address(bool $asString=false): array|string {
    public function get_address(bool $asString=false) {
      if ($asString) { return $this->street . ', ' . $this->city . ', ' . $this->state . ' ' . $this->zip; }
      else {
        return [
            'street'=>$this->street, 
            'city'=>$this->city, 
            'state'=>$this->state, 
            'zip'=>$this->zip
        ];
      }
    }
  }
