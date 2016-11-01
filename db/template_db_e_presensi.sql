


------------------------
--
-- Berikut adalah template table-table yang digunakan oleh CI wrapper
-- sebelum mengeksekusi SQL query dibawah ini yg harus dilakukan adalah
--		1. Kopi semua script ini ke lembar baru (Anda tidak berhak untuk merubah script dibawah ini)
--		   Karena ketika perubahan script dilakukan akan mempengaruhi struktur kode pada Aplikasi
--
-- 		2. Ganti nama schema sc_presensi, sesuaikan dengan nama schema yang anda gunakan
--		3. Pastikan basis data anda adalah Postgre SQL
--
--
-------------------------

CREATE OR REPLACE FUNCTION sc_presensi.tru_update_date()
  RETURNS trigger AS
$BODY$
    BEGIN
NEW.modified_date := now();
        RETURN NEW;
    END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;


CREATE TABLE sc_presensi.backbone_modul
(
  id_modul serial NOT NULL,
  nama_modul character varying(300),
  deskripsi_modul text,
  turunan_dari text,
  no_urut integer,
  created_date timestamp without time zone DEFAULT now(),
  created_by character varying(200),
  modified_date timestamp without time zone,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  show_on_menu smallint DEFAULT 1,
  CONSTRAINT pk_backbone_modul PRIMARY KEY (id_modul)
)
WITH (
  OIDS=FALSE
);

-- Trigger: tru_backbone_modul on sc_presensi.backbone_modul

-- DROP TRIGGER tru_backbone_modul ON sc_presensi.backbone_modul;

CREATE TRIGGER tru_backbone_modul
  BEFORE UPDATE
  ON sc_presensi.backbone_modul
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();

  
CREATE TABLE sc_presensi.backbone_user
(
  id_user serial NOT NULL,
  username character varying(60),
  password character varying(60),
  last_login timestamp without time zone,
  last_ip character varying(25),
  created_date timestamp without time zone DEFAULT now(),
  created_by character varying(200),
  modified_date timestamp without time zone,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  CONSTRAINT pk_backbone_user PRIMARY KEY (id_user)
)
WITH (
  OIDS=FALSE
);

-- Trigger: tru_backbone_user on sc_presensi.backbone_user

-- DROP TRIGGER tru_backbone_user ON sc_presensi.backbone_user;

CREATE TRIGGER tru_backbone_user
  BEFORE UPDATE
  ON sc_presensi.backbone_user
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();


CREATE TABLE sc_presensi.backbone_role
(
  id_role serial NOT NULL,
  nama_role character varying(100),
  is_public_role smallint,
  created_date timestamp without time zone DEFAULT now(),
  created_by character varying(200),
  modified_date timestamp without time zone,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  CONSTRAINT pk_backbone_role PRIMARY KEY (id_role)
)
WITH (
  OIDS=FALSE
);

-- Trigger: tru_backbone_role on sc_presensi.backbone_role

-- DROP TRIGGER tru_backbone_role ON sc_presensi.backbone_role;

CREATE TRIGGER tru_backbone_role
  BEFORE UPDATE
  ON sc_presensi.backbone_role
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();


CREATE TABLE sc_presensi.backbone_modul_role
(
  id_module_role serial NOT NULL,
  id_role integer,
  id_modul integer,
  is_read smallint,
  is_write smallint,
  is_delete smallint,
  is_update smallint,
  created_date timestamp without time zone DEFAULT now(),
  created_by character varying(200),
  modified_date timestamp without time zone,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  CONSTRAINT pk_backbone_module_role PRIMARY KEY (id_module_role),
  CONSTRAINT fk_backbone_modul_role_backbone_modul FOREIGN KEY (id_modul)
      REFERENCES sc_presensi.backbone_modul (id_modul) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_backbone_modul_role_backbone_role FOREIGN KEY (id_role)
      REFERENCES sc_presensi.backbone_role (id_role) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);

-- Trigger: tru_backbone_modul_role on sc_presensi.backbone_modul_role

-- DROP TRIGGER tru_backbone_modul_role ON sc_presensi.backbone_modul_role;

CREATE TRIGGER tru_backbone_modul_role
  BEFORE UPDATE
  ON sc_presensi.backbone_modul_role
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();


CREATE TABLE sc_presensi.backbone_profil
(
  id_profil serial NOT NULL,
  id_user integer, -- backbone_user
  nama_profil character varying(200),
  email_profil character varying(100),
  created_date timestamp without time zone DEFAULT now(),
  created_by character varying(200),
  modified_date timestamp without time zone,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  CONSTRAINT pk_backbone_profil PRIMARY KEY (id_profil),
  CONSTRAINT fk_backbone_profil_backbone_user FOREIGN KEY (id_user)
      REFERENCES sc_presensi.backbone_user (id_user) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE
)
WITH (
  OIDS=FALSE
);
COMMENT ON COLUMN sc_presensi.backbone_profil.id_user IS 'backbone_user';


-- Trigger: tru_backbone_profil on sc_presensi.backbone_profil

-- DROP TRIGGER tru_backbone_profil ON sc_presensi.backbone_profil;

CREATE TRIGGER tru_backbone_profil
  BEFORE UPDATE
  ON sc_presensi.backbone_profil
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();


CREATE TABLE sc_presensi.backbone_user_role
(
  id_user_role serial NOT NULL,
  id_user integer,
  id_role integer,
  created_date timestamp without time zone DEFAULT now(),
  created_by character varying(200),
  modified_date timestamp without time zone,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  CONSTRAINT pk_backbone_user_role PRIMARY KEY (id_user_role),
  CONSTRAINT fk_backbone_user_role_backbone_role FOREIGN KEY (id_role)
      REFERENCES sc_presensi.backbone_role (id_role) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_backbone_user_role_backbone_user FOREIGN KEY (id_user)
      REFERENCES sc_presensi.backbone_user (id_user) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE
)
WITH (
  OIDS=FALSE
);

-- Trigger: tru_backbone_user_role on sc_presensi.backbone_user_role

-- DROP TRIGGER tru_backbone_user_role ON sc_presensi.backbone_user_role;

CREATE TRIGGER tru_backbone_user_role
  BEFORE UPDATE
  ON sc_presensi.backbone_user_role
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();



----------------------------------------------------
--
--	FUNCTION TEMPLATE, PLEASE DO NOT REWRITE THIS CODE WITHOUT CONFIRMATION
--
----------------------------------------------------
CREATE OR REPLACE FUNCTION sc_presensi.fn_crypt_match(
    i_string_id character varying,
    i_match_string character varying)
  RETURNS boolean AS
$BODY$
DECLARE

 is_match boolean;
 comparison_crypt text;
 comparison_string text;
 make_key text;

BEGIN

is_match = 0;
IF i_match_string != '' THEN

make_key = split_part(i_match_string, '_', 2);
comparison_crypt = split_part(i_match_string, '_', 1);
IF make_key != '' AND comparison_crypt != '' THEN

 comparison_string = md5(make_key || i_string_id);

 IF comparison_string = comparison_crypt THEN
	is_match = 1;
 END IF;
  
END IF;


END IF;

return is_match;
    
END ;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;
  
-- Function: sc_presensi.fn_generate_crypt(character varying)

-- DROP FUNCTION sc_presensi.fn_generate_crypt(character varying);

CREATE OR REPLACE FUNCTION sc_presensi.fn_generate_crypt(i_string character varying)
  RETURNS text AS
$BODY$
DECLARE

 input_string text;
 output_string text;
 salt CHARACTER VARYING[61];
 make_key text;

BEGIN

input_string = trim(both ' ' from i_string);
output_string = '';
IF input_string != '' THEN

select fn_generate_key from sc_presensi.fn_generate_key(18) into make_key;
output_string = md5(make_key || input_string) || '_' || make_key;
END IF;

return output_string;
    
END ;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- Function: sc_presensi.fn_generate_crypt(integer)

-- DROP FUNCTION sc_presensi.fn_generate_crypt(integer);

CREATE OR REPLACE FUNCTION sc_presensi.fn_generate_crypt(i_integer integer)
  RETURNS text AS
$BODY$
DECLARE
output_string text;
BEGIN

select fn_generate_crypt from sc_presensi.fn_generate_crypt(coalesce(i_integer, 0)::character varying) into output_string;

return output_string;
    
END ;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- Function: sc_presensi.fn_generate_key(integer)

-- DROP FUNCTION sc_presensi.fn_generate_key(integer);

CREATE OR REPLACE FUNCTION sc_presensi.fn_generate_key(length integer)
  RETURNS text AS
$BODY$
DECLARE

 text_salt text;
 salt CHARACTER VARYING[61];
 make_key text;

BEGIN

salt[0] = 'a';
salt[1] = 'b';
salt[2] = 'c';
salt[3] = 'd';
salt[4] = 'e';
salt[5] = 'f';
salt[6] = 'g';
salt[7] = 'h';
salt[8] = 'i';
salt[9] = 'j';
salt[10] = 'k';
salt[11] = 'l';
salt[12] = 'm';
salt[13] = 'n';
salt[14] = 'o';
salt[15] = 'p';
salt[16] = 'q';
salt[17] = 'r';
salt[18] = 's';
salt[19] = 't';
salt[20] = 'u';
salt[21] = 'v';
salt[22] = 'w';
salt[23] = 'x';
salt[24] = 'y';
salt[25] = 'z';
salt[26] = 'A';
salt[27] = 'B';
salt[28] = 'C';
salt[29] = 'D';
salt[30] = 'E';
salt[31] = 'F';
salt[32] = 'G';
salt[33] = 'H';
salt[34] = 'I';
salt[35] = 'J';
salt[36] = 'K';
salt[37] = 'L';
salt[38] = 'M';
salt[39] = 'N';
salt[40] = 'O';
salt[41] = 'P';
salt[42] = 'Q';
salt[43] = 'R';
salt[44] = 'S';
salt[45] = 'T';
salt[46] = 'U';
salt[47] = 'V';
salt[48] = 'W';
salt[49] = 'X';
salt[50] = 'Y';
salt[51] = 'Z';
salt[52] = '0';
salt[53] = '1';
salt[54] = '2';
salt[55] = '3';
salt[56] = '4';
salt[57] = '5';
salt[58] = '6';
salt[59] = '7';
salt[60] = '8';
salt[61] = '9';

make_key = '';

FOR i in 1..length LOOP

make_key = make_key || salt[floor(random()*(61-0)+0)];

END LOOP;

RETURN make_key;

END ;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

  
-- Function: sc_presensi.fnselectmodulaccessrulebymodulnameandrolename(character varying, integer)

-- DROP FUNCTION sc_presensi.fnselectmodulaccessrulebymodulnameandrolename(character varying, integer);

CREATE OR REPLACE FUNCTION sc_presensi.fnselectmodulaccessrulebymodulnameandrolename(
    IN i_modul_name character varying,
    IN i_id_user integer)
  RETURNS TABLE(id_module_role integer, is_read integer, is_write integer, is_delete integer, is_update integer, nama_modul text, deskripsi_modul text, nama_role text, username text, nama_profil text) AS
$BODY$
DECLARE
BEGIN
  
 -- laksanakan query
 RETURN QUERY
select
		coalesce(sc_presensi.backbone_modul_role.id_module_role,0),
		coalesce(sc_presensi.backbone_modul_role.is_read,0),
		coalesce(sc_presensi.backbone_modul_role.is_write,0),
		coalesce(sc_presensi.backbone_modul_role.is_delete,0),
		coalesce(sc_presensi.backbone_modul_role.is_update,0),
		coalesce(sc_presensi.backbone_modul.nama_modul,'-')::text,
		coalesce(sc_presensi.backbone_modul.deskripsi_modul,'-')::text,
		coalesce(sc_presensi.backbone_role.nama_role,'-')::text,
		coalesce(sc_presensi.backbone_user.username,'-')::text,
		coalesce(sc_presensi.ref_pegawai.nama_sambung,'-')::text as nama_profil
	   from sc_presensi.backbone_modul_role
	   join sc_presensi.backbone_modul on sc_presensi.backbone_modul.id_modul = sc_presensi.backbone_modul_role.id_modul and sc_presensi.backbone_modul.record_active = '1'
	   join sc_presensi.backbone_role on sc_presensi.backbone_role.id_role = sc_presensi.backbone_modul_role.id_role and sc_presensi.backbone_role.record_active = '1'
	   join sc_presensi.backbone_user_role on sc_presensi.backbone_user_role.id_role = sc_presensi.backbone_role.id_role and sc_presensi.backbone_user_role.record_active = '1'
	   join sc_presensi.backbone_user on sc_presensi.backbone_user.id_user = sc_presensi.backbone_user_role.id_user and sc_presensi.backbone_user.id_user = i_id_user
	   join sc_presensi.ref_pegawai on sc_presensi.ref_pegawai.id_user = sc_presensi.backbone_user.id_user and sc_presensi.ref_pegawai.id_user = i_id_user
 where sc_presensi.backbone_modul.nama_modul = i_modul_name and sc_presensi.backbone_modul_role.record_active = '1';
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100
  ROWS 1000;


  
CREATE OR REPLACE VIEW sc_presensi.v_user AS 
 SELECT backbone_user.id_user,
    backbone_user.username,
    backbone_user.record_active,
    backbone_profil.id_profil,
    backbone_profil.nama_profil,
    backbone_profil.email_profil
   FROM sc_presensi.backbone_user
     JOIN sc_presensi.backbone_profil ON backbone_profil.id_user = backbone_user.id_user;




-- Table: sc_presensi.ref_tingkat_pendidikan

-- DROP TABLE sc_presensi.ref_tingkat_pendidikan;

CREATE TABLE sc_presensi.ref_tingkat_pendidikan
(
  id_tingkat_pendidikan serial NOT NULL,
  kode_tingkat_pendidikan character varying(20),
  tingkat_pendidikan character varying(200),
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint,
  CONSTRAINT pk_ref_tingkat_pendidikan PRIMARY KEY (id_tingkat_pendidikan)
)
WITH (
  OIDS=FALSE
);

-- Index: sc_presensi.ref_tingkat_pendidikan_pk

-- DROP INDEX sc_presensi.ref_tingkat_pendidikan_pk;

CREATE UNIQUE INDEX ref_tingkat_pendidikan_pk
  ON sc_presensi.ref_tingkat_pendidikan
  USING btree
  (id_tingkat_pendidikan);


-- Trigger: tru_ref_tingkat_pendidikan on sc_presensi.ref_tingkat_pendidikan

-- DROP TRIGGER tru_ref_tingkat_pendidikan ON sc_presensi.ref_tingkat_pendidikan;

CREATE TRIGGER tru_ref_tingkat_pendidikan
  BEFORE UPDATE
  ON sc_presensi.ref_tingkat_pendidikan
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();





-- Table: sc_presensi.ref_skpd

-- DROP TABLE sc_presensi.ref_skpd;

CREATE TABLE sc_presensi.ref_skpd
(
  id_skpd serial NOT NULL,
  nama_skpd character varying(200),
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint,
  col_order smallint DEFAULT 1, -- digunakan untuk menentukan urutan data yang akan ditampilkan pada tabel ini
  abbr_skpd character varying(100),
  alamat_skpd character varying(300),
  kodepos character varying(60),
  no_telp character varying(100),
  email character varying(100),
  website character varying(200),
  id_skpd_parent integer,
  level integer,
  CONSTRAINT pk_ref_skpd PRIMARY KEY (id_skpd)
)
WITH (
  OIDS=FALSE
);
COMMENT ON COLUMN sc_presensi.ref_skpd.col_order IS 'digunakan untuk menentukan urutan data yang akan ditampilkan pada tabel ini';


-- Index: sc_presensi.ref_skpd_pk

-- DROP INDEX sc_presensi.ref_skpd_pk;

CREATE UNIQUE INDEX ref_skpd_pk
  ON sc_presensi.ref_skpd
  USING btree
  (id_skpd);


-- Trigger: tru_ref_skpd on sc_presensi.ref_skpd

-- DROP TRIGGER tru_ref_skpd ON sc_presensi.ref_skpd;

CREATE TRIGGER tru_ref_skpd
  BEFORE UPDATE
  ON sc_presensi.ref_skpd
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();




-- Table: sc_presensi.ref_provinsi

-- DROP TABLE sc_presensi.ref_provinsi;

CREATE TABLE sc_presensi.ref_provinsi
(
  id_provinsi serial NOT NULL,
  kode_provinsi character varying(20),
  nama_provinsi character varying(200),
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint,
  CONSTRAINT pk_ref_provinsi PRIMARY KEY (id_provinsi)
)
WITH (
  OIDS=FALSE
);

-- Index: sc_presensi.ref_provinsi_pk

-- DROP INDEX sc_presensi.ref_provinsi_pk;

CREATE UNIQUE INDEX ref_provinsi_pk
  ON sc_presensi.ref_provinsi
  USING btree
  (id_provinsi);


-- Trigger: tru_ref_provinsi on sc_presensi.ref_provinsi

-- DROP TRIGGER tru_ref_provinsi ON sc_presensi.ref_provinsi;

CREATE TRIGGER tru_ref_provinsi
  BEFORE UPDATE
  ON sc_presensi.ref_provinsi
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();




-- Table: sc_presensi.ref_kabupaten_kota

-- DROP TABLE sc_presensi.ref_kabupaten_kota;

CREATE TABLE sc_presensi.ref_kabupaten_kota
(
  id_kabupaten_kota serial NOT NULL,
  id_provinsi integer,
  kode_kabupaten character varying(30),
  nama_kabupaten character varying(200),
  is_ibukota smallint,
  keterangan text,
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint,
  CONSTRAINT pk_ref_kabupaten_kota PRIMARY KEY (id_kabupaten_kota),
  CONSTRAINT fk_ref_kabu_fk_ref_pr_ref_prov FOREIGN KEY (id_provinsi)
      REFERENCES sc_presensi.ref_provinsi (id_provinsi) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);

-- Index: sc_presensi.fk_ref_provinsi_ref_kabupaten_f

-- DROP INDEX sc_presensi.fk_ref_provinsi_ref_kabupaten_f;

CREATE INDEX fk_ref_provinsi_ref_kabupaten_f
  ON sc_presensi.ref_kabupaten_kota
  USING btree
  (id_provinsi);

-- Index: sc_presensi.ref_kabupaten_kota_ak

-- DROP INDEX sc_presensi.ref_kabupaten_kota_ak;

CREATE UNIQUE INDEX ref_kabupaten_kota_ak
  ON sc_presensi.ref_kabupaten_kota
  USING btree
  (id_kabupaten_kota);


-- Trigger: tru_ref_kabupaten_kota on sc_presensi.ref_kabupaten_kota

-- DROP TRIGGER tru_ref_kabupaten_kota ON sc_presensi.ref_kabupaten_kota;

CREATE TRIGGER tru_ref_kabupaten_kota
  BEFORE UPDATE
  ON sc_presensi.ref_kabupaten_kota
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();




-- Table: sc_presensi.ref_jenisidentitas

-- DROP TABLE sc_presensi.ref_jenisidentitas;

CREATE TABLE sc_presensi.ref_jenisidentitas
(
  id_jenisidentitas serial NOT NULL,
  identitas character varying(32),
  keterangan character varying(300),
  created_date timestamp without time zone DEFAULT now(),
  created_by character varying(200),
  modified_date timestamp without time zone,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  CONSTRAINT pk_ref_jenisidentitas PRIMARY KEY (id_jenisidentitas)
)
WITH (
  OIDS=FALSE
);

-- Trigger: tru_ref_jenisidentitas on sc_presensi.ref_jenisidentitas

-- DROP TRIGGER tru_ref_jenisidentitas ON sc_presensi.ref_jenisidentitas;

CREATE TRIGGER tru_ref_jenisidentitas
  BEFORE UPDATE
  ON sc_presensi.ref_jenisidentitas
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();



CREATE TABLE sc_presensi.ref_jabatan
(
  id_jabatan serial NOT NULL,
  jabatan character varying(200),
  keterangan text,
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  id_golongan smallint,
  CONSTRAINT pk_ref_jabatan PRIMARY KEY (id_jabatan)
)
WITH (
  OIDS=FALSE
);

-- Index: sc_presensi.ref_jabatan_pk

-- DROP INDEX sc_presensi.ref_jabatan_pk;

CREATE UNIQUE INDEX ref_jabatan_pk
  ON sc_presensi.ref_jabatan
  USING btree
  (id_jabatan);


-- Trigger: tru_ref_jabatan on sc_presensi.ref_jabatan

-- DROP TRIGGER tru_ref_jabatan ON sc_presensi.ref_jabatan;

CREATE TRIGGER tru_ref_jabatan
  BEFORE UPDATE
  ON sc_presensi.ref_jabatan
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();


CREATE TABLE sc_presensi.ref_golongan
(
  id_golongan serial NOT NULL,
  kode_golongan character varying(20),
  golongan character varying(60),
  keterangan text,
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint,
  CONSTRAINT pk_ref_golongan PRIMARY KEY (id_golongan)
)
WITH (
  OIDS=FALSE
);

-- Index: sc_presensi.ref_golongan_pk

-- DROP INDEX sc_presensi.ref_golongan_pk;

CREATE UNIQUE INDEX ref_golongan_pk
  ON sc_presensi.ref_golongan
  USING btree
  (id_golongan);


-- Trigger: tru_ref_golongan on sc_presensi.ref_golongan

-- DROP TRIGGER tru_ref_golongan ON sc_presensi.ref_golongan;

CREATE TRIGGER tru_ref_golongan
  BEFORE UPDATE
  ON sc_presensi.ref_golongan
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();


  

CREATE TABLE sc_presensi.ref_eselon
(
  id_eselon serial NOT NULL,
  nama_eselon character varying(60), -- Menjelaskan tentang nama atau sebutan Eselon...
  keterangan text,
  col_order smallint DEFAULT 1, -- sebagai acuan penyortiran urutan eselon
  created_date timestamp without time zone,
  created_by character varying(200),
  modified_date timestamp without time zone,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  kode_eselon character varying(20),
  CONSTRAINT pk_ref_eselon PRIMARY KEY (id_eselon)
)
WITH (
  OIDS=FALSE
);

COMMENT ON COLUMN sc_presensi.ref_eselon.nama_eselon IS 'Menjelaskan tentang nama atau sebutan Eselon

cth : Eselon I';
COMMENT ON COLUMN sc_presensi.ref_eselon.col_order IS 'sebagai acuan penyortiran urutan eselon';


-- Trigger: tru_ref_eselon on sc_presensi.ref_eselon

-- DROP TRIGGER tru_ref_eselon ON sc_presensi.ref_eselon;

CREATE TRIGGER tru_ref_eselon
  BEFORE UPDATE
  ON sc_presensi.ref_eselon
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();


CREATE TABLE sc_presensi.ref_status_perkawinan
(
  id_status_perkawinan serial NOT NULL,
  status_perkawinan character varying(150),
  kode_status_perkawinan character varying(150),
  keyword character varying(1000),
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  CONSTRAINT pk_ref_status_perkawinan PRIMARY KEY (id_status_perkawinan)
)
WITH (
  OIDS=FALSE
);

-- Index: sc_presensi.ref_status_perkawinan_pk

-- DROP INDEX sc_presensi.ref_status_perkawinan_pk;

CREATE UNIQUE INDEX ref_status_perkawinan_pk
  ON sc_presensi.ref_status_perkawinan
  USING btree
  (id_status_perkawinan);


-- Trigger: tru_ref_status_perkawinan on sc_presensi.ref_status_perkawinan

-- DROP TRIGGER tru_ref_status_perkawinan ON sc_presensi.ref_status_perkawinan;

CREATE TRIGGER tru_ref_status_perkawinan
  BEFORE UPDATE
  ON sc_presensi.ref_status_perkawinan
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();



CREATE TABLE sc_presensi.ref_pegawai
(
  id_pegawai serial NOT NULL,
  id_status_perkawinan integer,
  gelar_depan character varying(20),
  gelar_belakang character varying(100),
  nama_depan character varying(60),
  nama_tengah character varying(60),
  nama_belakang character varying(60),
  nama_sambung character varying(200),
  tgl_lahir date,
  tempat_lahir character varying(200),
  nip character varying(60),
  no_kep character varying(200),
  tmt_peg date,
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint,
  foto_profil text,
  id_pegawai_crypted character varying(300),
  npwp character varying(255),
  id_user integer,
  CONSTRAINT pk_ref_pegawai PRIMARY KEY (id_pegawai),
  CONSTRAINT fk_ref_pega_fk_ref_st_ref_stat FOREIGN KEY (id_status_perkawinan)
      REFERENCES sc_presensi.ref_status_perkawinan (id_status_perkawinan) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);

CREATE OR REPLACE FUNCTION sc_presensi.tris_crypt_id_pegawai()
  RETURNS trigger AS
$BODY$
DECLARE
make_crypt_id_pegawai text;
    BEGIN

select fn_generate_crypt INTO make_crypt_id_pegawai from sc_presensi.fn_generate_crypt(NEW.id_pegawai);

	IF make_crypt_id_pegawai != '' THEN
		UPDATE sc_presensi.ref_pegawai
		SET id_pegawai_crypted = make_crypt_id_pegawai
		WHERE id_pegawai = NEW.id_pegawai;
	END IF;
	
        return NEW;
    END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- Index: sc_presensi.fk_ref_status_perkawinan_ref_pe

-- DROP INDEX sc_presensi.fk_ref_status_perkawinan_ref_pe;

CREATE INDEX fk_ref_status_perkawinan_ref_pe
  ON sc_presensi.ref_pegawai
  USING btree
  (id_status_perkawinan);

-- Index: sc_presensi.ref_pegawai_pk

-- DROP INDEX sc_presensi.ref_pegawai_pk;

CREATE UNIQUE INDEX ref_pegawai_pk
  ON sc_presensi.ref_pegawai
  USING btree
  (id_pegawai);


-- Trigger: tri_ref_pegawai on sc_presensi.ref_pegawai

-- DROP TRIGGER tri_ref_pegawai ON sc_presensi.ref_pegawai;

CREATE TRIGGER tri_ref_pegawai
  AFTER INSERT
  ON sc_presensi.ref_pegawai
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tris_crypt_id_pegawai();

-- Trigger: tru_ref_pegawai on sc_presensi.ref_pegawai

-- DROP TRIGGER tru_ref_pegawai ON sc_presensi.ref_pegawai;

CREATE TRIGGER tru_ref_pegawai
  BEFORE UPDATE
  ON sc_presensi.ref_pegawai
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();

-- Table: sc_presensi.ref_ttd

-- DROP TABLE sc_presensi.ref_ttd;






CREATE TABLE sc_presensi.ref_ttd
(
  id_ref_ttd serial NOT NULL,
  id_pegawai integer,
  jabatan_ttd character varying(100),
  uraian_atas_ttd character varying(100),
  uraian_bawah_ttd character varying(100),
  id_skpd integer,
  created_date timestamp without time zone,
  created_by character varying(200),
  modified_date timestamp without time zone,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  CONSTRAINT pk_ref_ttd PRIMARY KEY (id_ref_ttd),
  CONSTRAINT fk_ref_ttd_ref_pegawai FOREIGN KEY (id_pegawai)
      REFERENCES sc_presensi.ref_pegawai (id_pegawai) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_ref_ttd_ref_skpd FOREIGN KEY (id_skpd)
      REFERENCES sc_presensi.ref_skpd (id_skpd) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);

-- Trigger: tru_ref_ttd on sc_presensi.ref_ttd

-- DROP TRIGGER tru_ref_ttd ON sc_presensi.ref_ttd;

CREATE TRIGGER tru_ref_ttd
  BEFORE UPDATE
  ON sc_presensi.ref_ttd
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();

-- Table: sc_presensi.tr_pegawai_golongan

-- DROP TABLE sc_presensi.tr_pegawai_golongan;

CREATE TABLE sc_presensi.tr_pegawai_golongan
(
  id_pegawai_golongan serial NOT NULL,
  id_golongan integer,
  id_pegawai integer,
  tgl_ditetapkan date,
  tgl_berakhir date,
  is_active smallint,
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  CONSTRAINT pk_tr_pegawai_golongan PRIMARY KEY (id_pegawai_golongan),
  CONSTRAINT fk_tr_pegaw_fk_ref_go_ref_golo FOREIGN KEY (id_golongan)
      REFERENCES sc_presensi.ref_golongan (id_golongan) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_tr_peggol_ref_peg FOREIGN KEY (id_pegawai)
      REFERENCES sc_presensi.ref_pegawai (id_pegawai) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE
)
WITH (
  OIDS=FALSE
);

-- Index: sc_presensi.fk_ref_golongan_tr_pegawai_golo

-- DROP INDEX sc_presensi.fk_ref_golongan_tr_pegawai_golo;

CREATE INDEX fk_ref_golongan_tr_pegawai_golo
  ON sc_presensi.tr_pegawai_golongan
  USING btree
  (id_golongan);

-- Index: sc_presensi.fk_ref_pegawai_tr_pegawai_golon

-- DROP INDEX sc_presensi.fk_ref_pegawai_tr_pegawai_golon;

CREATE INDEX fk_ref_pegawai_tr_pegawai_golon
  ON sc_presensi.tr_pegawai_golongan
  USING btree
  (id_pegawai);

-- Index: sc_presensi.tr_pegawai_golongan_pk

-- DROP INDEX sc_presensi.tr_pegawai_golongan_pk;

CREATE UNIQUE INDEX tr_pegawai_golongan_pk
  ON sc_presensi.tr_pegawai_golongan
  USING btree
  (id_pegawai_golongan);

CREATE OR REPLACE FUNCTION sc_presensi.tris_active_tr_pegawai_golongan()
  RETURNS trigger AS
$BODY$
    BEGIN

IF NEW.is_active = 1 THEN
		UPDATE sc_presensi.tr_pegawai_golongan
		SET is_active = 0
		WHERE id_pegawai = NEW.id_pegawai AND id_pegawai_golongan <> NEW.id_pegawai_golongan;
	END IF;
        return NEW;
    END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

  
-- Trigger: tris_active_tr_pegawai_golongan on sc_presensi.tr_pegawai_golongan

-- DROP TRIGGER tris_active_tr_pegawai_golongan ON sc_presensi.tr_pegawai_golongan;

CREATE TRIGGER tris_active_tr_pegawai_golongan
  AFTER INSERT OR UPDATE
  ON sc_presensi.tr_pegawai_golongan
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tris_active_tr_pegawai_golongan();

-- Trigger: tru_tr_pegawai_golongan on sc_presensi.tr_pegawai_golongan

-- DROP TRIGGER tru_tr_pegawai_golongan ON sc_presensi.tr_pegawai_golongan;

CREATE TRIGGER tru_tr_pegawai_golongan
  BEFORE UPDATE
  ON sc_presensi.tr_pegawai_golongan
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();


  -- Table: sc_presensi.tr_pegawai_profil

-- DROP TABLE sc_presensi.tr_pegawai_profil;

CREATE TABLE sc_presensi.tr_pegawai_profil
(
  id_pegawai_profil serial NOT NULL,
  id_pegawai integer,
  id_profil integer,
  CONSTRAINT pk_tr_pegawai_profil PRIMARY KEY (id_pegawai_profil),
  CONSTRAINT fk_trpegpro_refpeg FOREIGN KEY (id_pegawai)
      REFERENCES sc_presensi.ref_pegawai (id_pegawai) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE
)
WITH (
  OIDS=FALSE
);



-- Table: sc_presensi.tr_pegawai_skpd

-- DROP TABLE sc_presensi.tr_pegawai_skpd;

CREATE TABLE sc_presensi.tr_pegawai_skpd
(
  id_pegawai_skpd serial NOT NULL,
  id_skpd integer,
  id_jabatan integer,
  id_pegawai integer,
  tgl_mulai date,
  tgl_berakhir date,
  is_active smallint,
  keterangan text,
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint,
  CONSTRAINT pk_tr_pegawai_skpd PRIMARY KEY (id_pegawai_skpd),
  CONSTRAINT fk_tr_pegaw_fk_ref_ja_ref_jaba FOREIGN KEY (id_jabatan)
      REFERENCES sc_presensi.ref_jabatan (id_jabatan) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_tr_pegaw_fk_ref_sk_ref_skpd FOREIGN KEY (id_skpd)
      REFERENCES sc_presensi.ref_skpd (id_skpd) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_tr_pegskpd_ref_peg FOREIGN KEY (id_pegawai)
      REFERENCES sc_presensi.ref_pegawai (id_pegawai) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE
)
WITH (
  OIDS=FALSE
);

-- Index: sc_presensi.fk_ref_jabatan_tr_pegawai_skpd_

-- DROP INDEX sc_presensi.fk_ref_jabatan_tr_pegawai_skpd_;

CREATE INDEX fk_ref_jabatan_tr_pegawai_skpd_
  ON sc_presensi.tr_pegawai_skpd
  USING btree
  (id_jabatan);

-- Index: sc_presensi.fk_ref_pegawai_tr_pegawai_skpd_

-- DROP INDEX sc_presensi.fk_ref_pegawai_tr_pegawai_skpd_;

CREATE INDEX fk_ref_pegawai_tr_pegawai_skpd_
  ON sc_presensi.tr_pegawai_skpd
  USING btree
  (id_pegawai);

-- Index: sc_presensi.fk_ref_skpd_tr_pegawai_skpd_fk

-- DROP INDEX sc_presensi.fk_ref_skpd_tr_pegawai_skpd_fk;

CREATE INDEX fk_ref_skpd_tr_pegawai_skpd_fk
  ON sc_presensi.tr_pegawai_skpd
  USING btree
  (id_skpd);

-- Index: sc_presensi.tr_pegawai_skpd_pk

-- DROP INDEX sc_presensi.tr_pegawai_skpd_pk;

CREATE UNIQUE INDEX tr_pegawai_skpd_pk
  ON sc_presensi.tr_pegawai_skpd
  USING btree
  (id_pegawai_skpd);


-- Trigger: tru_tr_pegawai_skpd on sc_presensi.tr_pegawai_skpd

-- DROP TRIGGER tru_tr_pegawai_skpd ON sc_presensi.tr_pegawai_skpd;

CREATE TRIGGER tru_tr_pegawai_skpd
  BEFORE UPDATE
  ON sc_presensi.tr_pegawai_skpd
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();

-- Table: sc_presensi.tr_pegawai_skpd_jabatan

-- DROP TABLE sc_presensi.tr_pegawai_skpd_jabatan;

CREATE TABLE sc_presensi.tr_pegawai_skpd_jabatan
(
  id_pegawai_skpd_jabatan serial NOT NULL,
  id_jabatan integer,
  id_eselon integer,
  tmt_eselon timestamp without time zone,
  is_active smallint DEFAULT 1,
  created_date timestamp without time zone,
  created_by character varying(200),
  modified_date timestamp without time zone,
  modified_by character varying(200),
  record_active smallint DEFAULT 1,
  id_pegawai_skpd integer,
  masa_kerja_jabatan_bulan character varying(5),
  masa_kerja_jabatan_tahun character varying(5),
  CONSTRAINT pk_tr_pegawai_skpd_jabatan PRIMARY KEY (id_pegawai_skpd_jabatan),
  CONSTRAINT fk_tr_pegawai_skpd_jabatan_ref_eselon FOREIGN KEY (id_eselon)
      REFERENCES sc_presensi.ref_eselon (id_eselon) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_tr_pegawai_skpd_jabatan_ref_jabatan FOREIGN KEY (id_jabatan)
      REFERENCES sc_presensi.ref_jabatan (id_jabatan) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);

-- Trigger: tru_tr_pegawai_skpd_jabatan on sc_presensi.tr_pegawai_skpd_jabatan

-- DROP TRIGGER tru_tr_pegawai_skpd_jabatan ON sc_presensi.tr_pegawai_skpd_jabatan;

CREATE TRIGGER tru_tr_pegawai_skpd_jabatan
  BEFORE UPDATE
  ON sc_presensi.tr_pegawai_skpd_jabatan
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();


  -- Table: sc_presensi.tr_tingkat_pendidikan_pegawai

-- DROP TABLE sc_presensi.tr_tingkat_pendidikan_pegawai;

CREATE TABLE sc_presensi.tr_tingkat_pendidikan_pegawai
(
  id_tingkat_pendidikan_pegawai serial NOT NULL,
  id_tingkat_pendidikan integer,
  id_kabupaten_kota integer,
  id_pegawai integer,
  tgl_masuk date,
  tgl_lulus date,
  nama_institusi character varying(200),
  fakultas character varying(200),
  jurusan character varying(200),
  is_active smallint,
  created_date date,
  created_by character varying(200),
  modified_date date,
  modified_by character varying(200),
  record_active smallint,
  CONSTRAINT pk_tr_tingkat_pendidikan_pegaw PRIMARY KEY (id_tingkat_pendidikan_pegawai),
  CONSTRAINT fk_tr_tingk_fk_ref_pe_ref_pega FOREIGN KEY (id_pegawai)
      REFERENCES sc_presensi.ref_pegawai (id_pegawai) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_tr_tingk_fk_ref_ti_ref_ting FOREIGN KEY (id_tingkat_pendidikan)
      REFERENCES sc_presensi.ref_tingkat_pendidikan (id_tingkat_pendidikan) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);

-- Index: sc_presensi.fk_ref_pegawai_tr_tingkat_pendi

-- DROP INDEX sc_presensi.fk_ref_pegawai_tr_tingkat_pendi;

CREATE INDEX fk_ref_pegawai_tr_tingkat_pendi
  ON sc_presensi.tr_tingkat_pendidikan_pegawai
  USING btree
  (id_pegawai);

-- Index: sc_presensi.fk_ref_tingkat_pendidikan_tr_ti

-- DROP INDEX sc_presensi.fk_ref_tingkat_pendidikan_tr_ti;

CREATE INDEX fk_ref_tingkat_pendidikan_tr_ti
  ON sc_presensi.tr_tingkat_pendidikan_pegawai
  USING btree
  (id_tingkat_pendidikan);

-- Index: sc_presensi.tr_tingkat_pendidikan_pegawai_p

-- DROP INDEX sc_presensi.tr_tingkat_pendidikan_pegawai_p;

CREATE UNIQUE INDEX tr_tingkat_pendidikan_pegawai_p
  ON sc_presensi.tr_tingkat_pendidikan_pegawai
  USING btree
  (id_tingkat_pendidikan_pegawai);


-- Trigger: tru_tr_tingkat_pendidikan_pegawai on sc_presensi.tr_tingkat_pendidikan_pegawai

-- DROP TRIGGER tru_tr_tingkat_pendidikan_pegawai ON sc_presensi.tr_tingkat_pendidikan_pegawai;

CREATE TRIGGER tru_tr_tingkat_pendidikan_pegawai
  BEFORE UPDATE
  ON sc_presensi.tr_tingkat_pendidikan_pegawai
  FOR EACH ROW
  EXECUTE PROCEDURE sc_presensi.tru_update_date();


-- Function: sc_presensi.tris_active_tr_pegawai_golongan()

-- DROP FUNCTION sc_presensi.tris_active_tr_pegawai_golongan();


