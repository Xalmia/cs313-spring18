INSERT INTO text_box (text_box_location, text_content)
VALUES ( '(20,20)' , 'This is test test for testing the read-only database.');

INSERT INTO page_in_journal (text_box_fk, page_title)
VALUES ('1', 'Test Page');

INSERT INTO section_in_journal (page_fk, section_title)
VALUES ('1', 'Test Section');

INSERT INTO journal (section_fk, journal_title)
VALUES ('1', 'Test Journal');

INSERT INTO user_file(journal_fk)
VALUES ('1');