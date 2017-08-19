DROP INDEX IDX_31E581A032C8A3DE;
DROP INDEX IDX_31E581A0F639F774;
DROP INDEX IDX_31E581A03DD7B7A7;
CREATE TEMPORARY TABLE __temp__donation AS SELECT id, donor_id, campaign_id, organization_id FROM donation;
DROP TABLE donation;
CREATE TABLE donation (id INTEGER NOT NULL, donor_id INTEGER DEFAULT NULL, campaign_id INTEGER DEFAULT NULL, organization_id INTEGER DEFAULT NULL, PRIMARY KEY(id), CONSTRAINT FK_31E581A03DD7B7A7 FOREIGN KEY (donor_id) REFERENCES donor (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_31E581A0F639F774 FOREIGN KEY (campaign_id) REFERENCES campaign (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_31E581A032C8A3DE FOREIGN KEY (organization_id) REFERENCES organization (id) NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO donation (id, donor_id, campaign_id, organization_id) SELECT id, donor_id, campaign_id, organization_id FROM __temp__donation;
DROP TABLE __temp__donation;
CREATE INDEX IDX_31E581A032C8A3DE ON donation (organization_id);
CREATE INDEX IDX_31E581A0F639F774 ON donation (campaign_id);
CREATE INDEX IDX_31E581A03DD7B7A7 ON donation (donor_id);
DROP INDEX UNIQ_D7F24097CCFA12B8;
CREATE TEMPORARY TABLE __temp__donor AS SELECT id, profile_id FROM donor;
DROP TABLE donor;
CREATE TABLE donor (id INTEGER NOT NULL, profile_id INTEGER DEFAULT NULL, PRIMARY KEY(id), CONSTRAINT FK_D7F24097CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id) NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO donor (id, profile_id) SELECT id, profile_id FROM __temp__donor;
DROP TABLE __temp__donor;
CREATE UNIQUE INDEX UNIQ_D7F24097CCFA12B8 ON donor (profile_id);
DROP INDEX IDX_6079E4B8F639F774;
DROP INDEX UNIQ_6079E4B832C8A3DE;
DROP INDEX UNIQ_6079E4B8166D1F9C;
CREATE TEMPORARY TABLE __temp__benefactor AS SELECT id, project_id, organization_id, campaign_id FROM benefactor;
DROP TABLE benefactor;
CREATE TABLE benefactor (id INTEGER NOT NULL, project_id INTEGER DEFAULT NULL, organization_id INTEGER DEFAULT NULL, campaign_id INTEGER DEFAULT NULL, PRIMARY KEY(id), CONSTRAINT FK_6079E4B8166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_6079E4B832C8A3DE FOREIGN KEY (organization_id) REFERENCES organization (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_6079E4B8F639F774 FOREIGN KEY (campaign_id) REFERENCES campaign (id) NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO benefactor (id, project_id, organization_id, campaign_id) SELECT id, project_id, organization_id, campaign_id FROM __temp__benefactor;
DROP TABLE __temp__benefactor;
CREATE INDEX IDX_6079E4B8F639F774 ON benefactor (campaign_id);
CREATE UNIQUE INDEX UNIQ_6079E4B832C8A3DE ON benefactor (organization_id);
CREATE UNIQUE INDEX UNIQ_6079E4B8166D1F9C ON benefactor (project_id);
DROP INDEX IDX_426EF392CCFA12B8;
CREATE TEMPORARY TABLE __temp__staff AS SELECT id, profile_id FROM staff;
DROP TABLE staff;
CREATE TABLE staff (id INTEGER NOT NULL, profile_id INTEGER DEFAULT NULL, PRIMARY KEY(id), CONSTRAINT FK_426EF392CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id) NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO staff (id, profile_id) SELECT id, profile_id FROM __temp__staff;
DROP TABLE __temp__staff;
CREATE INDEX IDX_426EF392CCFA12B8 ON staff (profile_id);
DROP INDEX IDX_7305C758166D1F9C;
DROP INDEX IDX_7305C758D4D57CD;
CREATE TEMPORARY TABLE __temp__staff_project AS SELECT staff_id, project_id FROM staff_project;
DROP TABLE staff_project;
CREATE TABLE staff_project (staff_id INTEGER NOT NULL, project_id INTEGER NOT NULL, PRIMARY KEY(staff_id, project_id), CONSTRAINT FK_7305C758D4D57CD FOREIGN KEY (staff_id) REFERENCES staff (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_7305C758166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO staff_project (staff_id, project_id) SELECT staff_id, project_id FROM __temp__staff_project;
DROP TABLE __temp__staff_project;
CREATE INDEX IDX_7305C758166D1F9C ON staff_project (project_id);
CREATE INDEX IDX_7305C758D4D57CD ON staff_project (staff_id);
DROP INDEX IDX_3D4BB273F639F774;
DROP INDEX IDX_3D4BB273D4D57CD;
CREATE TEMPORARY TABLE __temp__staff_campaign AS SELECT staff_id, campaign_id FROM staff_campaign;
DROP TABLE staff_campaign;
CREATE TABLE staff_campaign (staff_id INTEGER NOT NULL, campaign_id INTEGER NOT NULL, PRIMARY KEY(staff_id, campaign_id), CONSTRAINT FK_3D4BB273D4D57CD FOREIGN KEY (staff_id) REFERENCES staff (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_3D4BB273F639F774 FOREIGN KEY (campaign_id) REFERENCES campaign (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO staff_campaign (staff_id, campaign_id) SELECT staff_id, campaign_id FROM __temp__staff_campaign;
DROP TABLE __temp__staff_campaign;
CREATE INDEX IDX_3D4BB273F639F774 ON staff_campaign (campaign_id);
CREATE INDEX IDX_3D4BB273D4D57CD ON staff_campaign (staff_id);
DROP INDEX IDX_2FB3D0EE32C8A3DE;
CREATE TEMPORARY TABLE __temp__project AS SELECT id, organization_id FROM project;
DROP TABLE project;
CREATE TABLE project (id INTEGER NOT NULL, organization_id INTEGER DEFAULT NULL, PRIMARY KEY(id), CONSTRAINT FK_2FB3D0EE32C8A3DE FOREIGN KEY (organization_id) REFERENCES organization (id) NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO project (id, organization_id) SELECT id, organization_id FROM __temp__project;
DROP TABLE __temp__project;
CREATE INDEX IDX_2FB3D0EE32C8A3DE ON project (organization_id);
DROP INDEX UNIQ_F4DD95F74DC1279C;
CREATE TEMPORARY TABLE __temp__movement AS SELECT id, donation_id FROM movement;
DROP TABLE movement;
CREATE TABLE movement (id INTEGER NOT NULL, donation_id INTEGER DEFAULT NULL, PRIMARY KEY(id), CONSTRAINT FK_F4DD95F74DC1279C FOREIGN KEY (donation_id) REFERENCES donation (id) NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO movement (id, donation_id) SELECT id, donation_id FROM __temp__movement;
DROP TABLE __temp__movement;
CREATE UNIQUE INDEX UNIQ_F4DD95F74DC1279C ON movement (donation_id);
DROP INDEX UNIQ_8D93D649CCFA12B8;
CREATE TEMPORARY TABLE __temp__user AS SELECT id, profile_id FROM user;
DROP TABLE user;
CREATE TABLE user (id INTEGER NOT NULL, profile_id INTEGER DEFAULT NULL, PRIMARY KEY(id), CONSTRAINT FK_8D93D649CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id) NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO user (id, profile_id) SELECT id, profile_id FROM __temp__user;
DROP TABLE __temp__user;
CREATE UNIQUE INDEX UNIQ_8D93D649CCFA12B8 ON user (profile_id);