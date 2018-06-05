INSERT INTO text_box (text_box_location, text_content)
VALUES ( '(20,20)' , 'This is test test for testing the read-only database.');

INSERT INTO page_in_journal (page_title)
VALUES ('Test Page');

INSERT INTO section_in_journal (section_title)
VALUES ('Test Section');

INSERT INTO journal (journal_title)
VALUES ('Test Journal');

INSERT INTO user_file(user_name)
VALUES ('test_user_1');

INSERT INTO user_journal(user_fk, journal_fk)
VALUES ('1', '1');

INSERT INTO journal_section(journal_fk, section_fk)
VALUES ('1', '1');

INSERT INTO section_page(section_fk, page_fk)
VALUES ('1', '1');

INSERT INTO page_text(page_fk, text_fk)
VALUES ('1', '1');
