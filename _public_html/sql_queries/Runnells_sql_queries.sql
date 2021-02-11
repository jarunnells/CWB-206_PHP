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
SELECT count(*) AS CoxAdvisees
FROM student s
JOIN faculty f
  ON s.fid = f.fid
WHERE concat(f.ffname, ' ', f.flname) LIKE ('Kim Cox')
GROUP BY s.fid;

-- #6 [ x ]
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
