/* Adding Courses Table */
CREATE TABLE courses (
id VARCHAR(12) PRIMARY KEY,
school VARCHAR(40) NOT NULL,
course_name VARCHAR(40) NOT NULL,
course_code VARCHAR(40) NOT NULL,
professor VARCHAR(40) NOT NULL
);

/* Adding Courses_Topics Table */
CREATE TABLE courses_topics (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
course_id VARCHAR(12) NOT NULL,
topic VARCHAR(40) NOT NULL
);

/* Adding Topics_Vids Table*/
CREATE TABLE topic_vids (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
topic_id INT(6) NOT NULL,
vid_link VARCHAR(256) NOT NULL
);

/* Example Course */
INSERT INTO courses (id, school, course_name, course_code, professor)
VALUES ('chunthsuzz5i', 'University of Connecticut', 'Operations Management', 'OPIM 3104', 'Hongfei and Mohsen');

INSERT INTO courses_topics (course_id, topic)
VALUES ('chunthsuzz5i', 'Decision making tools');

INSERT INTO courses_topics (course_id, topic)
VALUES ('chunthsuzz5i', 'Forecasting');

INSERT INTO courses_topics (course_id, topic)
VALUES ('chunthsuzz5i', 'Project Management');

INSERT INTO topic_vids (topic_id, vid_link)
VALUES (2, 'Wo5YWXDRXv8');

INSERT INTO courses (id, school, course_name, course_code, professor)
VALUES ('chun54uzz5i', 'University of Connecticut', 'Management in Interpersonal Behavior', 'MGMT 3101', 'Travis Grosser');

INSERT INTO courses (id, school, course_name, course_code, professor)
VALUES ('chun532uzz5i', 'Stanford University', 'How to Start a Startup', 'CS 183B', 'Sam Altman');
