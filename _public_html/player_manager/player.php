<?php declare(strict_types=1);
    /******************************************************
     *   DEVELOPER: J.A. Runnells
     *      COURSE: CIS-206-R11
     *      BRANCH: main
     *        FILE: player.php
    ******************************************************/

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

    // https://stackoverflow.com/questions/11237511/multiple-ways-of-calling-parent-method-in-php
    // https://www.freecodecamp.org/news/the-best-php-examples/
    //

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
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Player Class</title>
    </head>
    <body>
        <?php
            $br = "<br />";
            $hr = "<br /><hr /><br />";

            $player_01 = new Player('Ziggy', 'Wiggy', '05/26/2016');
            $player_01->set_team('Wizards');
            $player_01->set_address('1234 North Main Street', 'AnyTown', 'CA', '90210');
            $player_01->set_phone('415.555.1234');

            // $player_02 = new MinorPlayer('Marley', 'McFarley', '12/05/2014', 'Ziggy', 'Wiggy');
            $player_02 = new MinorPlayer('Ziggy', 'Wiggy', '05/26/2016', 'Marley', 'McFarley');
            $player_02->set_team('Knights');
            $player_02->set_address('4321 South Main Street', 'AnyTown', 'CO', '80642');
            $player_02->set_phone('720.555.4321');

            echo "Player(asString=true): " . $player_01->get_player_name(true) . $br;
            echo "Player['first']: " . $player_01->get_player_name()['first'] . $br;
            echo "Player['last']: " . $player_01->get_player_name()['last'] . $br;
            echo "Birthday: " . $player_01->get_birth_date() . $br;
            echo "Team: " . $player_01->get_team() . $br;
            echo "Parent(asString=true): " . $player_01->get_parent_name(true) . $br;
            echo "Parent['first']: " . $player_01->get_parent_name()['first'] . $br;
            echo "Parent['last']: " . $player_01->get_parent_name()['last'] . $br;
            echo "Phone: " . $player_01->get_phone() . $br;
            echo "Address(asString=true): " . $player_01->get_address(true) . $br;
            echo "Address['street']: " . $player_01->get_address()['street'] . $br;
            echo "Address['city']: " . $player_01->get_address()['city'] . $br;
            echo "Address['state']: " . $player_01->get_address()['state'] . $br;
            echo "Address['zip']: " . $player_01->get_address()['zip'] . $br;
            echo $hr;
            echo "MinorPlayer->Parent(asString=true): " . $player_02->get_parent_name(true) . $br;
        ?>
    </body>
</html>