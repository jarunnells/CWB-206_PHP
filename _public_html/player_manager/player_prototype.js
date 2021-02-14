'use strict';

/**
 * JavaScript -> Player Prototype :: player.js
 */

const player = {
  player_first_name: 'Ziggy',
  player_last_name: 'Wiggy',
  birth_date: new Date(2016,4,26),
  phone: '303-555-1234',
  team: 'Wizards',
  address: {
    street: '12345 Main Street SW',
    city: 'AnyTown',
    state: 'ST',
    zip: '54321-9876',
  },
};

const parent = {
  parent_first_name: 'Marley',
  parent_last_name: 'McFarley',
};

const { player_first_name: fname, player_last_name: lname, address: { street, zip } } = player;
const { parent_first_name: pfname, parent_last_name: plname} = parent;

console.log(fname);
console.log(lname);
console.log(`${lname}, ${fname}`);
console.log(`${street}\n${zip}`);
console.log(`${pfname} ${plname} (${lname}, ${fname})`);


const minorPlayer = { ...player, ...parent };
console.log(player);
console.log(minorPlayer);

const playerToString = ({
                          player_first_name: fname,
                          player_last_name: lname,
                          team='Unassigned',
                          parent_first_name: pfname='N/A'}) => {
  console.log(`${lname}, ${fname} -> ${team} -> Parent: ${pfname}`);
};
playerToString(player);
playerToString(minorPlayer);
