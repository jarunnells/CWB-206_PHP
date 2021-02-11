SELECT frank FROM faculty;
SELECT DISTINCT frank FROM faculty;
SELECT ffname, fmi, flname, frank FROM faculty WHERE frank='ASSO';
SELECT room FROM location WHERE bldg_code='BUS' AND capacity>=40;
SELECT sfname, slname, sdob, sclass FROM student WHERE sclass='SR' OR sdob<'1982-01-01';
SELECT * FROM enrollment WHERE grade IS NULL;
SELECT * FROM enrollment WHERE grade IS NOT NULL;
SELECT bldg_code, room, capacity FROM location WHERE capacity>=40 ORDER BY capacity;
