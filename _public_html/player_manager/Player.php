<?php declare(strict_types=1);
  /******************************************************
   *   DEVELOPER: J.A. Runnells
   *      COURSE: CIS-206-R11
   *      BRANCH: main
   *        FILE: Player.php
   ******************************************************/

  /**
   * Class Player
   */
  class Player
  {
    // Properties
    protected string $player_first_name;
    protected string $player_last_name;
    protected string $birth_date;
    protected string $phone;
    protected string $team;
    protected string $street;
    protected string $city;
    protected string $state;
    protected string $zip;
    public static int $counter = 0;

    /**
     * Player constructor.
     * @param string $player_first_name
     * @param string $player_last_name
     * @param string $birth_date
     */
    public function __construct(
      string $player_first_name,
      string $player_last_name,
      string $birth_date
    )
    {
      $this->player_first_name = $player_first_name;
      $this->player_last_name = $player_last_name;
      $this->birth_date = $birth_date;
      self::$counter++;
    }
    // Player Class Set Methods

    /**
     * @param string $team
     */
    public function set_team(string $team): void
    {
      $this->team = $team;
    }

    /**
     * @param string $phone
     */
    public function set_phone(string $phone): void
    {
      $this->phone = $phone;
    }

    /**
     * @param string $street
     * @param string $city
     * @param string $state
     * @param string $zip
     */
    public function set_address(
      string $street,
      string $city = 'Denver',
      string $state = 'CO',
      string $zip = '80203'
    ): void
    {
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
    public function get_player_name(bool $asString = false): array|string
    {
      if ($asString) {
        return $this->player_first_name . ' ' . $this->player_last_name;
      } else {
        return [
          'first' => $this->player_first_name,
          'last' => $this->player_last_name
        ];
      }
    }

    /**
     * @return string
     */
    public function get_birth_date(): string
    {
      return $this->birth_date;
    }

    /**
     * @return string
     */
    public function get_team(): string
    {
      return $this->team;
    }

    /**
     * @return string
     */
    public function get_phone(): string
    {
      return $this->phone;
    }

    /**
     * @param bool $asString
     * @return array|string
     */
    public function get_address(bool $asString = false): array|string
    {
      if ($asString) {
        return $this->street . ', ' . $this->city . ', ' . $this->state . ' ' . $this->zip;
      } else {
        return [
          'street' => $this->street,
          'city' => $this->city,
          'state' => $this->state,
          'zip' => $this->zip
        ];
      }
    }
  }
