PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "galerias" ("id" integer not null primary key autoincrement, "title" varchar not null, "description" varchar not null, "url" varchar not null);
COMMIT;
