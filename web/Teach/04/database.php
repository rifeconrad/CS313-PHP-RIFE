/*
1. This system must track notes for multiple users.

2. The speakers should be tracked separately from the conference because one speaker will speak at multiple conferences.

3. Individual sessions of conference (e.g., Saturday morning, Sunday afternoon) need not be tracked, rather simply the year and month, (e.g., April 2009, Oct 2012).

4. You need not account for the fact that some speakers will speak multiple times at a conference, but assume that a note can be tied to a "speaker + conference."

5. Multiple notes can be added by the same user about a single conference talk.
*/

CREATE TABLE Users (
	id      SERIAL PRIMARY KEY
);

CREATE TABLE Notes (
	id      SERIAL PRIMARY KEY,
	user_id                int,
	talk_id                int,
	FOREIGN KEY (user_id) REFERENCES Users(id),
	FOREIGN KEY (talk_id) REFERENCES Talks(id)
);

CREATE TABLE Speakers (
	id      SERIAL      PRIMARY KEY,
	name    varchar(80) NOT NULL
);

CREATE TABLE Talks (
	id      SERIAL PRIMARY KEY,
	speaker_id             int,
	conference_id          int,
	FOREIGN KEY (speaker_id) REFERENCES Speakers(id),
	FOREIGN KEY (conference_id) REFERENCES Conference(id)
);

CREATE TABLE Conference (
	id      SERIAL PRIMARY KEY,
	date    date   NOT NULL
);