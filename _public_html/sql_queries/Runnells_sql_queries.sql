--
-- J.A. Runnells
-- SQL Queries Assignment
--

-- #1 [ x ]
SELECT callid, cname FROM course;

-- #2 [ x ]
SELECT DISTINCT sclass FROM student;

-- #3 [ x ]
SELECT * FROM term WHERE status = 'CLOSED';

-- #4 [ x ]
SELECT sfname, slname, smi FROM student WHERE smi IS NOT NULL;

-- #5 [ x ]
-- #5.a TRADITIONAL
SELECT count(*) AS CoxAdvisees
FROM student s
JOIN faculty f
  ON s.fid = f.fid
WHERE concat(f.ffname, ' ', f.flname) LIKE ('Kim Cox')
GROUP BY s.fid;
-- #5.b IMPLIED
SELECT count(*) AS CoxAdvisees
FROM student s, faculty f
WHERE s.fid = f.fid
  AND concat(f.ffname, ' ', f.flname) LIKE ('Kim Cox')
GROUP BY s.fid;

-- #6 [ x ]
-- #6.a TRADITIONAL
SELECT c.callid, c_s.secnum, t.tdesc, e.grade
FROM course c
JOIN course_section c_s
  ON c.cid = c_s.cid
JOIN term t
  ON c_s.termid = t.termid
JOIN enrollment e
  ON c_s.csecid = e.csecid
JOIN student s
  ON e.sid = s.sid
WHERE e.grade IS NOT NULL
  AND concat(s.sfname, ' ', s.slname) LIKE ('Ruben Sanchez')
ORDER BY e.grade DESC;
-- #6.b IMPLIED
SELECT c.callid, c_s.secnum, t.tdesc, e.grade
FROM course c, course_section c_s, term t, enrollment e, student s
WHERE c.cid = c_s.cid AND c_s.termid = t.termid AND c_s.csecid = e.csecid AND e.sid = s.sid
  AND e.grade IS NOT NULL
  AND concat(s.sfname, ' ', s.slname) LIKE ('Ruben Sanchez')
ORDER BY e.grade DESC;
