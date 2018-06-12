CREATE TABLE text_box
(
    text_box_id SERIAL PRIMARY KEY,
    text_box_location POINT,
    text_content TEXT NOT NULL
);

CREATE TABLE image_handler
(
    image_id SERIAL PRIMARY KEY,
    image_storage_location VARCHAR(200) NOT NULL
);

CREATE TABLE image_box
(
    image_box_id SERIAL PRIMARY KEY,
    image_fk INTEGER REFERENCES image_handler(image_id),
    image_box_location POINT
);

CREATE TABLE page_in_journal
(
    page_id SERIAL PRIMARY KEY,
    page_title VARCHAR(100)
);

CREATE TABLE section_in_journal
(
    section_id SERIAL PRIMARY KEY,
    section_title VARCHAR(100)
);

CREATE TABLE journal
(
    journal_id SERIAL PRIMARy KEY,
    journal_title VARCHAR(100) NOT NULL
);

CREATE TABLE journal_section
(
    journal_fk INTEGER REFERENCES journal(journal_id),
    section_fk INTEGER REFERENCES section_in_journal(section_id)
);

CREATE TABLE section_page
(
    section_fk INTEGER REFERENCES section_in_journal(section_id),
    page_fk INTEGER REFERENCES page_in_journal(page_id)
);

CREATE TABLE page_text
(
    page_fk INTEGER REFERENCES page_in_journal(page_id),
    text_fk INTEGER REFERENCES text_box(text_box_id)
);

CREATE TABLE page_image
(
    page_fk INTEGER REFERENCES page_in_journal(page_id),
    image_box_fk INTEGER REFERENCES image_box(image_box_id)
);

CREATE TABLE user_file
(
    user_id SERIAL PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    image_fk INTEGER REFERENCES image_handler(image_id),
    user_password VARCHAR(256) NOT NULL
);

CREATE TABLE user_journal
(
    user_fk INTEGER REFERENCES user_file(user_id),
    journal_fk INTEGER REFERENCES journal(journal_id)
);
