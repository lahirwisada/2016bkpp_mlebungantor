/*
Navicat PGSQL Data Transfer

Source Server         : localhost
Source Server Version : 90404
Source Host           : localhost:5432
Source Database       : db_presensi
Source Schema         : sc_presensi

Target Server Type    : PGSQL
Target Server Version : 90404
File Encoding         : 65001

Date: 2016-11-16 01:17:44
*/


-- ----------------------------
-- Sequence structure for backbone_modul_id_modul_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."backbone_modul_id_modul_seq";
CREATE SEQUENCE "sc_presensi"."backbone_modul_id_modul_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 6
 CACHE 1;
SELECT setval('"sc_presensi"."backbone_modul_id_modul_seq"', 6, true);

-- ----------------------------
-- Sequence structure for backbone_modul_role_id_module_role_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."backbone_modul_role_id_module_role_seq";
CREATE SEQUENCE "sc_presensi"."backbone_modul_role_id_module_role_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 15
 CACHE 1;
SELECT setval('"sc_presensi"."backbone_modul_role_id_module_role_seq"', 15, true);

-- ----------------------------
-- Sequence structure for backbone_profil_id_profil_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."backbone_profil_id_profil_seq";
CREATE SEQUENCE "sc_presensi"."backbone_profil_id_profil_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;
SELECT setval('"sc_presensi"."backbone_profil_id_profil_seq"', 1, true);

-- ----------------------------
-- Sequence structure for backbone_role_id_role_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."backbone_role_id_role_seq";
CREATE SEQUENCE "sc_presensi"."backbone_role_id_role_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;
SELECT setval('"sc_presensi"."backbone_role_id_role_seq"', 1, true);

-- ----------------------------
-- Sequence structure for backbone_user_id_user_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."backbone_user_id_user_seq";
CREATE SEQUENCE "sc_presensi"."backbone_user_id_user_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;
SELECT setval('"sc_presensi"."backbone_user_id_user_seq"', 1, true);

-- ----------------------------
-- Sequence structure for backbone_user_role_id_user_role_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."backbone_user_role_id_user_role_seq";
CREATE SEQUENCE "sc_presensi"."backbone_user_role_id_user_role_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;
SELECT setval('"sc_presensi"."backbone_user_role_id_user_role_seq"', 1, true);

-- ----------------------------
-- Sequence structure for ref_eselon_id_eselon_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_eselon_id_eselon_seq";
CREATE SEQUENCE "sc_presensi"."ref_eselon_id_eselon_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for ref_golongan_id_golongan_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_golongan_id_golongan_seq";
CREATE SEQUENCE "sc_presensi"."ref_golongan_id_golongan_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for ref_jabatan_id_jabatan_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_jabatan_id_jabatan_seq";
CREATE SEQUENCE "sc_presensi"."ref_jabatan_id_jabatan_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for ref_jenisidentitas_id_jenisidentitas_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_jenisidentitas_id_jenisidentitas_seq";
CREATE SEQUENCE "sc_presensi"."ref_jenisidentitas_id_jenisidentitas_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for ref_kabupaten_kota_id_kabupaten_kota_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_kabupaten_kota_id_kabupaten_kota_seq";
CREATE SEQUENCE "sc_presensi"."ref_kabupaten_kota_id_kabupaten_kota_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for ref_pegawai_id_pegawai_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_pegawai_id_pegawai_seq";
CREATE SEQUENCE "sc_presensi"."ref_pegawai_id_pegawai_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for ref_provinsi_id_provinsi_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_provinsi_id_provinsi_seq";
CREATE SEQUENCE "sc_presensi"."ref_provinsi_id_provinsi_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for ref_skpd_id_skpd_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_skpd_id_skpd_seq";
CREATE SEQUENCE "sc_presensi"."ref_skpd_id_skpd_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for ref_status_perkawinan_id_status_perkawinan_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_status_perkawinan_id_status_perkawinan_seq";
CREATE SEQUENCE "sc_presensi"."ref_status_perkawinan_id_status_perkawinan_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 3
 CACHE 1;
SELECT setval('"sc_presensi"."ref_status_perkawinan_id_status_perkawinan_seq"', 3, true);

-- ----------------------------
-- Sequence structure for ref_tingkat_pendidikan_id_tingkat_pendidikan_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_tingkat_pendidikan_id_tingkat_pendidikan_seq";
CREATE SEQUENCE "sc_presensi"."ref_tingkat_pendidikan_id_tingkat_pendidikan_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for ref_ttd_id_ref_ttd_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."ref_ttd_id_ref_ttd_seq";
CREATE SEQUENCE "sc_presensi"."ref_ttd_id_ref_ttd_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for tr_pegawai_golongan_id_pegawai_golongan_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."tr_pegawai_golongan_id_pegawai_golongan_seq";
CREATE SEQUENCE "sc_presensi"."tr_pegawai_golongan_id_pegawai_golongan_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for tr_pegawai_profil_id_pegawai_profil_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."tr_pegawai_profil_id_pegawai_profil_seq";
CREATE SEQUENCE "sc_presensi"."tr_pegawai_profil_id_pegawai_profil_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for tr_pegawai_skpd_id_pegawai_skpd_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."tr_pegawai_skpd_id_pegawai_skpd_seq";
CREATE SEQUENCE "sc_presensi"."tr_pegawai_skpd_id_pegawai_skpd_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for tr_pegawai_skpd_jabatan_id_pegawai_skpd_jabatan_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."tr_pegawai_skpd_jabatan_id_pegawai_skpd_jabatan_seq";
CREATE SEQUENCE "sc_presensi"."tr_pegawai_skpd_jabatan_id_pegawai_skpd_jabatan_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for tr_tingkat_pendidikan_pegawai_id_tingkat_pendidikan_pegawai_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "sc_presensi"."tr_tingkat_pendidikan_pegawai_id_tingkat_pendidikan_pegawai_seq";
CREATE SEQUENCE "sc_presensi"."tr_tingkat_pendidikan_pegawai_id_tingkat_pendidikan_pegawai_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Table structure for backbone_modul
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."backbone_modul";
CREATE TABLE "sc_presensi"."backbone_modul" (
"id_modul" int4 DEFAULT nextval('"sc_presensi".backbone_modul_id_modul_seq'::regclass) NOT NULL,
"nama_modul" varchar(300) COLLATE "default",
"deskripsi_modul" text COLLATE "default",
"turunan_dari" text COLLATE "default",
"no_urut" int4,
"created_date" timestamp(6) DEFAULT now(),
"created_by" varchar(200) COLLATE "default",
"modified_date" timestamp(6),
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1,
"show_on_menu" int2 DEFAULT 1
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of backbone_modul
-- ----------------------------
INSERT INTO "sc_presensi"."backbone_modul" VALUES ('1', 'sistem', 'Sistem', '', '700', '2016-03-24 00:00:00', '', '2016-03-24 00:00:00', '', '1', '1');
INSERT INTO "sc_presensi"."backbone_modul" VALUES ('2', 'modul', 'Modul', 'sistem', '700', '2016-11-01 10:25:29.118', null, null, null, '1', '1');
INSERT INTO "sc_presensi"."backbone_modul" VALUES ('3', 'role', 'Role', 'sistem', '700', '2016-11-01 10:25:42.106', null, null, null, '1', '1');
INSERT INTO "sc_presensi"."backbone_modul" VALUES ('4', 'member', 'Member', 'sistem', '700', '2016-11-01 10:25:56.013', null, null, null, '1', '1');
INSERT INTO "sc_presensi"."backbone_modul" VALUES ('5', 'pustaka_data', 'Pustaka Data', '', '800', '2016-11-02 00:00:00', '', '2016-11-02 00:00:00', '', '1', '1');
INSERT INTO "sc_presensi"."backbone_modul" VALUES ('6', 'cref_tingkat_pendidikan', 'Ref. pendidikan', 'pustaka_data', '801', '2016-11-02 00:00:00', '', '2016-11-02 00:00:00', '', '1', '1');

-- ----------------------------
-- Table structure for backbone_modul_role
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."backbone_modul_role";
CREATE TABLE "sc_presensi"."backbone_modul_role" (
"id_module_role" int4 DEFAULT nextval('"sc_presensi".backbone_modul_role_id_module_role_seq'::regclass) NOT NULL,
"id_role" int4,
"id_modul" int4,
"is_read" int2,
"is_write" int2,
"is_delete" int2,
"is_update" int2,
"created_date" timestamp(6) DEFAULT now(),
"created_by" varchar(200) COLLATE "default",
"modified_date" timestamp(6),
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of backbone_modul_role
-- ----------------------------
INSERT INTO "sc_presensi"."backbone_modul_role" VALUES ('10', '1', '1', '1', '1', '1', '1', '2016-11-07 12:05:27', 'administrator', '2016-11-07 12:05:27', 'administrator', '1');
INSERT INTO "sc_presensi"."backbone_modul_role" VALUES ('11', '1', '2', '1', '1', '1', '1', '2016-11-07 12:05:27', 'administrator', '2016-11-07 12:05:27', 'administrator', '1');
INSERT INTO "sc_presensi"."backbone_modul_role" VALUES ('12', '1', '3', '1', '1', '1', '1', '2016-11-07 12:05:27', 'administrator', '2016-11-07 12:05:27', 'administrator', '1');
INSERT INTO "sc_presensi"."backbone_modul_role" VALUES ('13', '1', '4', '1', '1', '1', '1', '2016-11-07 12:05:27', 'administrator', '2016-11-07 12:05:27', 'administrator', '1');
INSERT INTO "sc_presensi"."backbone_modul_role" VALUES ('14', '1', '5', '1', '1', '1', '1', '2016-11-07 12:05:27', 'administrator', '2016-11-07 12:05:27', 'administrator', '1');
INSERT INTO "sc_presensi"."backbone_modul_role" VALUES ('15', '1', '6', '1', '1', '1', '1', '2016-11-07 12:05:27', 'administrator', '2016-11-07 12:05:27', 'administrator', '1');

-- ----------------------------
-- Table structure for backbone_profil
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."backbone_profil";
CREATE TABLE "sc_presensi"."backbone_profil" (
"id_profil" int4 DEFAULT nextval('"sc_presensi".backbone_profil_id_profil_seq'::regclass) NOT NULL,
"id_user" int4,
"nama_profil" varchar(200) COLLATE "default",
"email_profil" varchar(100) COLLATE "default",
"created_date" timestamp(6) DEFAULT now(),
"created_by" varchar(200) COLLATE "default",
"modified_date" timestamp(6),
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1
)
WITH (OIDS=FALSE)

;
COMMENT ON COLUMN "sc_presensi"."backbone_profil"."id_user" IS 'backbone_user';

-- ----------------------------
-- Records of backbone_profil
-- ----------------------------
INSERT INTO "sc_presensi"."backbone_profil" VALUES ('1', '1', 'admin oke', 'admin@admin.com', '2016-11-07 11:53:22.063', null, null, null, '1');

-- ----------------------------
-- Table structure for backbone_role
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."backbone_role";
CREATE TABLE "sc_presensi"."backbone_role" (
"id_role" int4 DEFAULT nextval('"sc_presensi".backbone_role_id_role_seq'::regclass) NOT NULL,
"nama_role" varchar(100) COLLATE "default",
"is_public_role" int2,
"created_date" timestamp(6) DEFAULT now(),
"created_by" varchar(200) COLLATE "default",
"modified_date" timestamp(6),
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of backbone_role
-- ----------------------------
INSERT INTO "sc_presensi"."backbone_role" VALUES ('1', 'administrator', null, '2016-03-24 00:00:00', '', '2016-11-07 12:05:27.661', '', '1');

-- ----------------------------
-- Table structure for backbone_user
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."backbone_user";
CREATE TABLE "sc_presensi"."backbone_user" (
"id_user" int4 DEFAULT nextval('"sc_presensi".backbone_user_id_user_seq'::regclass) NOT NULL,
"username" varchar(60) COLLATE "default",
"password" varchar(60) COLLATE "default",
"last_login" timestamp(6),
"last_ip" varchar(25) COLLATE "default",
"created_date" timestamp(6) DEFAULT now(),
"created_by" varchar(200) COLLATE "default",
"modified_date" timestamp(6),
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of backbone_user
-- ----------------------------
INSERT INTO "sc_presensi"."backbone_user" VALUES ('1', 'administrator', '16bef5bdc2a35c67a5b9971bad01d307::HNsh92DDxPhFs4vS', null, null, '2016-03-24 00:00:00', '', '2016-03-24 00:00:00', '', '1');

-- ----------------------------
-- Table structure for backbone_user_role
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."backbone_user_role";
CREATE TABLE "sc_presensi"."backbone_user_role" (
"id_user_role" int4 DEFAULT nextval('"sc_presensi".backbone_user_role_id_user_role_seq'::regclass) NOT NULL,
"id_user" int4,
"id_role" int4,
"created_date" timestamp(6) DEFAULT now(),
"created_by" varchar(200) COLLATE "default",
"modified_date" timestamp(6),
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of backbone_user_role
-- ----------------------------
INSERT INTO "sc_presensi"."backbone_user_role" VALUES ('1', '1', '1', '2016-11-01 10:26:26.418', null, null, null, '1');

-- ----------------------------
-- Table structure for ref_eselon
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_eselon";
CREATE TABLE "sc_presensi"."ref_eselon" (
"id_eselon" int4 DEFAULT nextval('"sc_presensi".ref_eselon_id_eselon_seq'::regclass) NOT NULL,
"nama_eselon" varchar(60) COLLATE "default",
"keterangan" text COLLATE "default",
"col_order" int2 DEFAULT 1,
"created_date" timestamp(6),
"created_by" varchar(200) COLLATE "default",
"modified_date" timestamp(6),
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1,
"kode_eselon" varchar(20) COLLATE "default"
)
WITH (OIDS=FALSE)

;
COMMENT ON COLUMN "sc_presensi"."ref_eselon"."nama_eselon" IS 'Menjelaskan tentang nama atau sebutan Eselon

cth : Eselon I';
COMMENT ON COLUMN "sc_presensi"."ref_eselon"."col_order" IS 'sebagai acuan penyortiran urutan eselon';

-- ----------------------------
-- Records of ref_eselon
-- ----------------------------

-- ----------------------------
-- Table structure for ref_golongan
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_golongan";
CREATE TABLE "sc_presensi"."ref_golongan" (
"id_golongan" int4 DEFAULT nextval('"sc_presensi".ref_golongan_id_golongan_seq'::regclass) NOT NULL,
"kode_golongan" varchar(20) COLLATE "default",
"golongan" varchar(60) COLLATE "default",
"keterangan" text COLLATE "default",
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ref_golongan
-- ----------------------------

-- ----------------------------
-- Table structure for ref_jabatan
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_jabatan";
CREATE TABLE "sc_presensi"."ref_jabatan" (
"id_jabatan" int4 DEFAULT nextval('"sc_presensi".ref_jabatan_id_jabatan_seq'::regclass) NOT NULL,
"jabatan" varchar(200) COLLATE "default",
"keterangan" text COLLATE "default",
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1,
"id_golongan" int2
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ref_jabatan
-- ----------------------------

-- ----------------------------
-- Table structure for ref_jenisidentitas
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_jenisidentitas";
CREATE TABLE "sc_presensi"."ref_jenisidentitas" (
"id_jenisidentitas" int4 DEFAULT nextval('"sc_presensi".ref_jenisidentitas_id_jenisidentitas_seq'::regclass) NOT NULL,
"identitas" varchar(32) COLLATE "default",
"keterangan" varchar(300) COLLATE "default",
"created_date" timestamp(6) DEFAULT now(),
"created_by" varchar(200) COLLATE "default",
"modified_date" timestamp(6),
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ref_jenisidentitas
-- ----------------------------

-- ----------------------------
-- Table structure for ref_kabupaten_kota
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_kabupaten_kota";
CREATE TABLE "sc_presensi"."ref_kabupaten_kota" (
"id_kabupaten_kota" int4 DEFAULT nextval('"sc_presensi".ref_kabupaten_kota_id_kabupaten_kota_seq'::regclass) NOT NULL,
"id_provinsi" int4,
"kode_kabupaten" varchar(30) COLLATE "default",
"nama_kabupaten" varchar(200) COLLATE "default",
"is_ibukota" int2,
"keterangan" text COLLATE "default",
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ref_kabupaten_kota
-- ----------------------------

-- ----------------------------
-- Table structure for ref_pegawai
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_pegawai";
CREATE TABLE "sc_presensi"."ref_pegawai" (
"id_pegawai" int4 DEFAULT nextval('"sc_presensi".ref_pegawai_id_pegawai_seq'::regclass) NOT NULL,
"id_status_perkawinan" int4,
"gelar_depan" varchar(20) COLLATE "default",
"gelar_belakang" varchar(100) COLLATE "default",
"nama_depan" varchar(60) COLLATE "default",
"nama_tengah" varchar(60) COLLATE "default",
"nama_belakang" varchar(60) COLLATE "default",
"nama_sambung" varchar(200) COLLATE "default",
"tgl_lahir" date,
"tempat_lahir" varchar(200) COLLATE "default",
"nip" varchar(60) COLLATE "default",
"no_kep" varchar(200) COLLATE "default",
"tmt_peg" date,
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2,
"foto_profil" text COLLATE "default",
"id_pegawai_crypted" varchar(300) COLLATE "default",
"npwp" varchar(255) COLLATE "default",
"id_user" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ref_pegawai
-- ----------------------------

-- ----------------------------
-- Table structure for ref_provinsi
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_provinsi";
CREATE TABLE "sc_presensi"."ref_provinsi" (
"id_provinsi" int4 DEFAULT nextval('"sc_presensi".ref_provinsi_id_provinsi_seq'::regclass) NOT NULL,
"kode_provinsi" varchar(20) COLLATE "default",
"nama_provinsi" varchar(200) COLLATE "default",
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ref_provinsi
-- ----------------------------

-- ----------------------------
-- Table structure for ref_skpd
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_skpd";
CREATE TABLE "sc_presensi"."ref_skpd" (
"id_skpd" int4 DEFAULT nextval('"sc_presensi".ref_skpd_id_skpd_seq'::regclass) NOT NULL,
"nama_skpd" varchar(200) COLLATE "default",
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2,
"col_order" int2 DEFAULT 1,
"abbr_skpd" varchar(100) COLLATE "default",
"alamat_skpd" varchar(300) COLLATE "default",
"kodepos" varchar(60) COLLATE "default",
"no_telp" varchar(100) COLLATE "default",
"email" varchar(100) COLLATE "default",
"website" varchar(200) COLLATE "default",
"id_skpd_parent" int4,
"level" int4
)
WITH (OIDS=FALSE)

;
COMMENT ON COLUMN "sc_presensi"."ref_skpd"."col_order" IS 'digunakan untuk menentukan urutan data yang akan ditampilkan pada tabel ini';

-- ----------------------------
-- Records of ref_skpd
-- ----------------------------

-- ----------------------------
-- Table structure for ref_status_perkawinan
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_status_perkawinan";
CREATE TABLE "sc_presensi"."ref_status_perkawinan" (
"id_status_perkawinan" int4 DEFAULT nextval('"sc_presensi".ref_status_perkawinan_id_status_perkawinan_seq'::regclass) NOT NULL,
"status_perkawinan" varchar(150) COLLATE "default",
"kode_status_perkawinan" varchar(150) COLLATE "default",
"keyword" varchar(1000) COLLATE "default",
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ref_status_perkawinan
-- ----------------------------
INSERT INTO "sc_presensi"."ref_status_perkawinan" VALUES ('1', 'menikah', 'nikah', null, null, null, null, null, '1');
INSERT INTO "sc_presensi"."ref_status_perkawinan" VALUES ('2', 'belum menikah', 'belum menikah', null, null, null, null, null, '1');
INSERT INTO "sc_presensi"."ref_status_perkawinan" VALUES ('3', 'cerai', 'cerai', null, null, null, null, null, '1');

-- ----------------------------
-- Table structure for ref_tingkat_pendidikan
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_tingkat_pendidikan";
CREATE TABLE "sc_presensi"."ref_tingkat_pendidikan" (
"id_tingkat_pendidikan" int4 DEFAULT nextval('"sc_presensi".ref_tingkat_pendidikan_id_tingkat_pendidikan_seq'::regclass) NOT NULL,
"kode_tingkat_pendidikan" varchar(20) COLLATE "default",
"tingkat_pendidikan" varchar(200) COLLATE "default",
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ref_tingkat_pendidikan
-- ----------------------------

-- ----------------------------
-- Table structure for ref_ttd
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."ref_ttd";
CREATE TABLE "sc_presensi"."ref_ttd" (
"id_ref_ttd" int4 DEFAULT nextval('"sc_presensi".ref_ttd_id_ref_ttd_seq'::regclass) NOT NULL,
"id_pegawai" int4,
"jabatan_ttd" varchar(100) COLLATE "default",
"uraian_atas_ttd" varchar(100) COLLATE "default",
"uraian_bawah_ttd" varchar(100) COLLATE "default",
"id_skpd" int4,
"created_date" timestamp(6),
"created_by" varchar(200) COLLATE "default",
"modified_date" timestamp(6),
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ref_ttd
-- ----------------------------

-- ----------------------------
-- Table structure for tr_pegawai_golongan
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."tr_pegawai_golongan";
CREATE TABLE "sc_presensi"."tr_pegawai_golongan" (
"id_pegawai_golongan" int4 DEFAULT nextval('"sc_presensi".tr_pegawai_golongan_id_pegawai_golongan_seq'::regclass) NOT NULL,
"id_golongan" int4,
"id_pegawai" int4,
"tgl_ditetapkan" date,
"tgl_berakhir" date,
"is_active" int2,
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tr_pegawai_golongan
-- ----------------------------

-- ----------------------------
-- Table structure for tr_pegawai_profil
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."tr_pegawai_profil";
CREATE TABLE "sc_presensi"."tr_pegawai_profil" (
"id_pegawai_profil" int4 DEFAULT nextval('"sc_presensi".tr_pegawai_profil_id_pegawai_profil_seq'::regclass) NOT NULL,
"id_pegawai" int4,
"id_profil" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tr_pegawai_profil
-- ----------------------------

-- ----------------------------
-- Table structure for tr_pegawai_skpd
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."tr_pegawai_skpd";
CREATE TABLE "sc_presensi"."tr_pegawai_skpd" (
"id_pegawai_skpd" int4 DEFAULT nextval('"sc_presensi".tr_pegawai_skpd_id_pegawai_skpd_seq'::regclass) NOT NULL,
"id_skpd" int4,
"id_jabatan" int4,
"id_pegawai" int4,
"tgl_mulai" date,
"tgl_berakhir" date,
"is_active" int2,
"keterangan" text COLLATE "default",
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tr_pegawai_skpd
-- ----------------------------

-- ----------------------------
-- Table structure for tr_pegawai_skpd_jabatan
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."tr_pegawai_skpd_jabatan";
CREATE TABLE "sc_presensi"."tr_pegawai_skpd_jabatan" (
"id_pegawai_skpd_jabatan" int4 DEFAULT nextval('"sc_presensi".tr_pegawai_skpd_jabatan_id_pegawai_skpd_jabatan_seq'::regclass) NOT NULL,
"id_jabatan" int4,
"id_eselon" int4,
"tmt_eselon" timestamp(6),
"is_active" int2 DEFAULT 1,
"created_date" timestamp(6),
"created_by" varchar(200) COLLATE "default",
"modified_date" timestamp(6),
"modified_by" varchar(200) COLLATE "default",
"record_active" int2 DEFAULT 1,
"id_pegawai_skpd" int4,
"masa_kerja_jabatan_bulan" varchar(5) COLLATE "default",
"masa_kerja_jabatan_tahun" varchar(5) COLLATE "default"
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tr_pegawai_skpd_jabatan
-- ----------------------------

-- ----------------------------
-- Table structure for tr_tingkat_pendidikan_pegawai
-- ----------------------------
DROP TABLE IF EXISTS "sc_presensi"."tr_tingkat_pendidikan_pegawai";
CREATE TABLE "sc_presensi"."tr_tingkat_pendidikan_pegawai" (
"id_tingkat_pendidikan_pegawai" int4 DEFAULT nextval('"sc_presensi".tr_tingkat_pendidikan_pegawai_id_tingkat_pendidikan_pegawai_seq'::regclass) NOT NULL,
"id_tingkat_pendidikan" int4,
"id_kabupaten_kota" int4,
"id_pegawai" int4,
"tgl_masuk" date,
"tgl_lulus" date,
"nama_institusi" varchar(200) COLLATE "default",
"fakultas" varchar(200) COLLATE "default",
"jurusan" varchar(200) COLLATE "default",
"is_active" int2,
"created_date" date,
"created_by" varchar(200) COLLATE "default",
"modified_date" date,
"modified_by" varchar(200) COLLATE "default",
"record_active" int2
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tr_tingkat_pendidikan_pegawai
-- ----------------------------

-- ----------------------------
-- View structure for v_user
-- ----------------------------
CREATE OR REPLACE VIEW "sc_presensi"."v_user" AS 
 SELECT backbone_user.id_user,
    backbone_user.username,
    backbone_user.record_active,
    backbone_profil.id_profil,
    backbone_profil.nama_profil,
    backbone_profil.email_profil
   FROM (sc_presensi.backbone_user
     JOIN sc_presensi.backbone_profil ON ((backbone_profil.id_user = backbone_user.id_user)));

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------
ALTER SEQUENCE "sc_presensi"."backbone_modul_id_modul_seq" OWNED BY "backbone_modul"."id_modul";
ALTER SEQUENCE "sc_presensi"."backbone_modul_role_id_module_role_seq" OWNED BY "backbone_modul_role"."id_module_role";
ALTER SEQUENCE "sc_presensi"."backbone_profil_id_profil_seq" OWNED BY "backbone_profil"."id_profil";
ALTER SEQUENCE "sc_presensi"."backbone_role_id_role_seq" OWNED BY "backbone_role"."id_role";
ALTER SEQUENCE "sc_presensi"."backbone_user_id_user_seq" OWNED BY "backbone_user"."id_user";
ALTER SEQUENCE "sc_presensi"."backbone_user_role_id_user_role_seq" OWNED BY "backbone_user_role"."id_user_role";
ALTER SEQUENCE "sc_presensi"."ref_eselon_id_eselon_seq" OWNED BY "ref_eselon"."id_eselon";
ALTER SEQUENCE "sc_presensi"."ref_golongan_id_golongan_seq" OWNED BY "ref_golongan"."id_golongan";
ALTER SEQUENCE "sc_presensi"."ref_jabatan_id_jabatan_seq" OWNED BY "ref_jabatan"."id_jabatan";
ALTER SEQUENCE "sc_presensi"."ref_jenisidentitas_id_jenisidentitas_seq" OWNED BY "ref_jenisidentitas"."id_jenisidentitas";
ALTER SEQUENCE "sc_presensi"."ref_kabupaten_kota_id_kabupaten_kota_seq" OWNED BY "ref_kabupaten_kota"."id_kabupaten_kota";
ALTER SEQUENCE "sc_presensi"."ref_pegawai_id_pegawai_seq" OWNED BY "ref_pegawai"."id_pegawai";
ALTER SEQUENCE "sc_presensi"."ref_provinsi_id_provinsi_seq" OWNED BY "ref_provinsi"."id_provinsi";
ALTER SEQUENCE "sc_presensi"."ref_skpd_id_skpd_seq" OWNED BY "ref_skpd"."id_skpd";
ALTER SEQUENCE "sc_presensi"."ref_status_perkawinan_id_status_perkawinan_seq" OWNED BY "ref_status_perkawinan"."id_status_perkawinan";
ALTER SEQUENCE "sc_presensi"."ref_tingkat_pendidikan_id_tingkat_pendidikan_seq" OWNED BY "ref_tingkat_pendidikan"."id_tingkat_pendidikan";
ALTER SEQUENCE "sc_presensi"."ref_ttd_id_ref_ttd_seq" OWNED BY "ref_ttd"."id_ref_ttd";
ALTER SEQUENCE "sc_presensi"."tr_pegawai_golongan_id_pegawai_golongan_seq" OWNED BY "tr_pegawai_golongan"."id_pegawai_golongan";
ALTER SEQUENCE "sc_presensi"."tr_pegawai_profil_id_pegawai_profil_seq" OWNED BY "tr_pegawai_profil"."id_pegawai_profil";
ALTER SEQUENCE "sc_presensi"."tr_pegawai_skpd_id_pegawai_skpd_seq" OWNED BY "tr_pegawai_skpd"."id_pegawai_skpd";
ALTER SEQUENCE "sc_presensi"."tr_pegawai_skpd_jabatan_id_pegawai_skpd_jabatan_seq" OWNED BY "tr_pegawai_skpd_jabatan"."id_pegawai_skpd_jabatan";
ALTER SEQUENCE "sc_presensi"."tr_tingkat_pendidikan_pegawai_id_tingkat_pendidikan_pegawai_seq" OWNED BY "tr_tingkat_pendidikan_pegawai"."id_tingkat_pendidikan_pegawai";

-- ----------------------------
-- Triggers structure for table backbone_modul
-- ----------------------------
CREATE TRIGGER "tru_backbone_modul" BEFORE UPDATE ON "sc_presensi"."backbone_modul"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table backbone_modul
-- ----------------------------
ALTER TABLE "sc_presensi"."backbone_modul" ADD PRIMARY KEY ("id_modul");

-- ----------------------------
-- Triggers structure for table backbone_modul_role
-- ----------------------------
CREATE TRIGGER "tru_backbone_modul_role" BEFORE UPDATE ON "sc_presensi"."backbone_modul_role"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table backbone_modul_role
-- ----------------------------
ALTER TABLE "sc_presensi"."backbone_modul_role" ADD PRIMARY KEY ("id_module_role");

-- ----------------------------
-- Triggers structure for table backbone_profil
-- ----------------------------
CREATE TRIGGER "tru_backbone_profil" BEFORE UPDATE ON "sc_presensi"."backbone_profil"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table backbone_profil
-- ----------------------------
ALTER TABLE "sc_presensi"."backbone_profil" ADD PRIMARY KEY ("id_profil");

-- ----------------------------
-- Triggers structure for table backbone_role
-- ----------------------------
CREATE TRIGGER "tru_backbone_role" BEFORE UPDATE ON "sc_presensi"."backbone_role"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table backbone_role
-- ----------------------------
ALTER TABLE "sc_presensi"."backbone_role" ADD PRIMARY KEY ("id_role");

-- ----------------------------
-- Triggers structure for table backbone_user
-- ----------------------------
CREATE TRIGGER "tru_backbone_user" BEFORE UPDATE ON "sc_presensi"."backbone_user"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table backbone_user
-- ----------------------------
ALTER TABLE "sc_presensi"."backbone_user" ADD PRIMARY KEY ("id_user");

-- ----------------------------
-- Triggers structure for table backbone_user_role
-- ----------------------------
CREATE TRIGGER "tru_backbone_user_role" BEFORE UPDATE ON "sc_presensi"."backbone_user_role"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table backbone_user_role
-- ----------------------------
ALTER TABLE "sc_presensi"."backbone_user_role" ADD PRIMARY KEY ("id_user_role");

-- ----------------------------
-- Triggers structure for table ref_eselon
-- ----------------------------
CREATE TRIGGER "tru_ref_eselon" BEFORE UPDATE ON "sc_presensi"."ref_eselon"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_eselon
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_eselon" ADD PRIMARY KEY ("id_eselon");

-- ----------------------------
-- Indexes structure for table ref_golongan
-- ----------------------------
CREATE UNIQUE INDEX "ref_golongan_pk" ON "sc_presensi"."ref_golongan" USING btree (id_golongan);

-- ----------------------------
-- Triggers structure for table ref_golongan
-- ----------------------------
CREATE TRIGGER "tru_ref_golongan" BEFORE UPDATE ON "sc_presensi"."ref_golongan"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_golongan
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_golongan" ADD PRIMARY KEY ("id_golongan");

-- ----------------------------
-- Indexes structure for table ref_jabatan
-- ----------------------------
CREATE UNIQUE INDEX "ref_jabatan_pk" ON "sc_presensi"."ref_jabatan" USING btree (id_jabatan);

-- ----------------------------
-- Triggers structure for table ref_jabatan
-- ----------------------------
CREATE TRIGGER "tru_ref_jabatan" BEFORE UPDATE ON "sc_presensi"."ref_jabatan"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_jabatan
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_jabatan" ADD PRIMARY KEY ("id_jabatan");

-- ----------------------------
-- Triggers structure for table ref_jenisidentitas
-- ----------------------------
CREATE TRIGGER "tru_ref_jenisidentitas" BEFORE UPDATE ON "sc_presensi"."ref_jenisidentitas"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_jenisidentitas
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_jenisidentitas" ADD PRIMARY KEY ("id_jenisidentitas");

-- ----------------------------
-- Indexes structure for table ref_kabupaten_kota
-- ----------------------------
CREATE INDEX "fk_ref_provinsi_ref_kabupaten_f" ON "sc_presensi"."ref_kabupaten_kota" USING btree (id_provinsi);
CREATE UNIQUE INDEX "ref_kabupaten_kota_ak" ON "sc_presensi"."ref_kabupaten_kota" USING btree (id_kabupaten_kota);

-- ----------------------------
-- Triggers structure for table ref_kabupaten_kota
-- ----------------------------
CREATE TRIGGER "tru_ref_kabupaten_kota" BEFORE UPDATE ON "sc_presensi"."ref_kabupaten_kota"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_kabupaten_kota
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_kabupaten_kota" ADD PRIMARY KEY ("id_kabupaten_kota");

-- ----------------------------
-- Indexes structure for table ref_pegawai
-- ----------------------------
CREATE INDEX "fk_ref_status_perkawinan_ref_pe" ON "sc_presensi"."ref_pegawai" USING btree (id_status_perkawinan);
CREATE UNIQUE INDEX "ref_pegawai_pk" ON "sc_presensi"."ref_pegawai" USING btree (id_pegawai);

-- ----------------------------
-- Triggers structure for table ref_pegawai
-- ----------------------------
CREATE TRIGGER "tri_ref_pegawai" AFTER INSERT ON "sc_presensi"."ref_pegawai"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tris_crypt_id_pegawai"();
CREATE TRIGGER "tru_ref_pegawai" BEFORE UPDATE ON "sc_presensi"."ref_pegawai"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_pegawai
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_pegawai" ADD PRIMARY KEY ("id_pegawai");

-- ----------------------------
-- Indexes structure for table ref_provinsi
-- ----------------------------
CREATE UNIQUE INDEX "ref_provinsi_pk" ON "sc_presensi"."ref_provinsi" USING btree (id_provinsi);

-- ----------------------------
-- Triggers structure for table ref_provinsi
-- ----------------------------
CREATE TRIGGER "tru_ref_provinsi" BEFORE UPDATE ON "sc_presensi"."ref_provinsi"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_provinsi
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_provinsi" ADD PRIMARY KEY ("id_provinsi");

-- ----------------------------
-- Indexes structure for table ref_skpd
-- ----------------------------
CREATE UNIQUE INDEX "ref_skpd_pk" ON "sc_presensi"."ref_skpd" USING btree (id_skpd);

-- ----------------------------
-- Triggers structure for table ref_skpd
-- ----------------------------
CREATE TRIGGER "tru_ref_skpd" BEFORE UPDATE ON "sc_presensi"."ref_skpd"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_skpd
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_skpd" ADD PRIMARY KEY ("id_skpd");

-- ----------------------------
-- Indexes structure for table ref_status_perkawinan
-- ----------------------------
CREATE UNIQUE INDEX "ref_status_perkawinan_pk" ON "sc_presensi"."ref_status_perkawinan" USING btree (id_status_perkawinan);

-- ----------------------------
-- Triggers structure for table ref_status_perkawinan
-- ----------------------------
CREATE TRIGGER "tru_ref_status_perkawinan" BEFORE UPDATE ON "sc_presensi"."ref_status_perkawinan"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_status_perkawinan
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_status_perkawinan" ADD PRIMARY KEY ("id_status_perkawinan");

-- ----------------------------
-- Indexes structure for table ref_tingkat_pendidikan
-- ----------------------------
CREATE UNIQUE INDEX "ref_tingkat_pendidikan_pk" ON "sc_presensi"."ref_tingkat_pendidikan" USING btree (id_tingkat_pendidikan);

-- ----------------------------
-- Triggers structure for table ref_tingkat_pendidikan
-- ----------------------------
CREATE TRIGGER "tru_ref_tingkat_pendidikan" BEFORE UPDATE ON "sc_presensi"."ref_tingkat_pendidikan"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_tingkat_pendidikan
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_tingkat_pendidikan" ADD PRIMARY KEY ("id_tingkat_pendidikan");

-- ----------------------------
-- Triggers structure for table ref_ttd
-- ----------------------------
CREATE TRIGGER "tru_ref_ttd" BEFORE UPDATE ON "sc_presensi"."ref_ttd"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table ref_ttd
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_ttd" ADD PRIMARY KEY ("id_ref_ttd");

-- ----------------------------
-- Indexes structure for table tr_pegawai_golongan
-- ----------------------------
CREATE INDEX "fk_ref_golongan_tr_pegawai_golo" ON "sc_presensi"."tr_pegawai_golongan" USING btree (id_golongan);
CREATE INDEX "fk_ref_pegawai_tr_pegawai_golon" ON "sc_presensi"."tr_pegawai_golongan" USING btree (id_pegawai);
CREATE UNIQUE INDEX "tr_pegawai_golongan_pk" ON "sc_presensi"."tr_pegawai_golongan" USING btree (id_pegawai_golongan);

-- ----------------------------
-- Triggers structure for table tr_pegawai_golongan
-- ----------------------------
CREATE TRIGGER "tris_active_tr_pegawai_golongan" AFTER INSERT OR UPDATE ON "sc_presensi"."tr_pegawai_golongan"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tris_active_tr_pegawai_golongan"();
CREATE TRIGGER "tru_tr_pegawai_golongan" BEFORE UPDATE ON "sc_presensi"."tr_pegawai_golongan"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table tr_pegawai_golongan
-- ----------------------------
ALTER TABLE "sc_presensi"."tr_pegawai_golongan" ADD PRIMARY KEY ("id_pegawai_golongan");

-- ----------------------------
-- Primary Key structure for table tr_pegawai_profil
-- ----------------------------
ALTER TABLE "sc_presensi"."tr_pegawai_profil" ADD PRIMARY KEY ("id_pegawai_profil");

-- ----------------------------
-- Indexes structure for table tr_pegawai_skpd
-- ----------------------------
CREATE INDEX "fk_ref_jabatan_tr_pegawai_skpd_" ON "sc_presensi"."tr_pegawai_skpd" USING btree (id_jabatan);
CREATE INDEX "fk_ref_pegawai_tr_pegawai_skpd_" ON "sc_presensi"."tr_pegawai_skpd" USING btree (id_pegawai);
CREATE INDEX "fk_ref_skpd_tr_pegawai_skpd_fk" ON "sc_presensi"."tr_pegawai_skpd" USING btree (id_skpd);
CREATE UNIQUE INDEX "tr_pegawai_skpd_pk" ON "sc_presensi"."tr_pegawai_skpd" USING btree (id_pegawai_skpd);

-- ----------------------------
-- Triggers structure for table tr_pegawai_skpd
-- ----------------------------
CREATE TRIGGER "tru_tr_pegawai_skpd" BEFORE UPDATE ON "sc_presensi"."tr_pegawai_skpd"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table tr_pegawai_skpd
-- ----------------------------
ALTER TABLE "sc_presensi"."tr_pegawai_skpd" ADD PRIMARY KEY ("id_pegawai_skpd");

-- ----------------------------
-- Triggers structure for table tr_pegawai_skpd_jabatan
-- ----------------------------
CREATE TRIGGER "tru_tr_pegawai_skpd_jabatan" BEFORE UPDATE ON "sc_presensi"."tr_pegawai_skpd_jabatan"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table tr_pegawai_skpd_jabatan
-- ----------------------------
ALTER TABLE "sc_presensi"."tr_pegawai_skpd_jabatan" ADD PRIMARY KEY ("id_pegawai_skpd_jabatan");

-- ----------------------------
-- Indexes structure for table tr_tingkat_pendidikan_pegawai
-- ----------------------------
CREATE INDEX "fk_ref_pegawai_tr_tingkat_pendi" ON "sc_presensi"."tr_tingkat_pendidikan_pegawai" USING btree (id_pegawai);
CREATE INDEX "fk_ref_tingkat_pendidikan_tr_ti" ON "sc_presensi"."tr_tingkat_pendidikan_pegawai" USING btree (id_tingkat_pendidikan);
CREATE UNIQUE INDEX "tr_tingkat_pendidikan_pegawai_p" ON "sc_presensi"."tr_tingkat_pendidikan_pegawai" USING btree (id_tingkat_pendidikan_pegawai);

-- ----------------------------
-- Triggers structure for table tr_tingkat_pendidikan_pegawai
-- ----------------------------
CREATE TRIGGER "tru_tr_tingkat_pendidikan_pegawai" BEFORE UPDATE ON "sc_presensi"."tr_tingkat_pendidikan_pegawai"
FOR EACH ROW
EXECUTE PROCEDURE "sc_presensi"."tru_update_date"();

-- ----------------------------
-- Primary Key structure for table tr_tingkat_pendidikan_pegawai
-- ----------------------------
ALTER TABLE "sc_presensi"."tr_tingkat_pendidikan_pegawai" ADD PRIMARY KEY ("id_tingkat_pendidikan_pegawai");

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."backbone_modul_role"
-- ----------------------------
ALTER TABLE "sc_presensi"."backbone_modul_role" ADD FOREIGN KEY ("id_modul") REFERENCES "sc_presensi"."backbone_modul" ("id_modul") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "sc_presensi"."backbone_modul_role" ADD FOREIGN KEY ("id_role") REFERENCES "sc_presensi"."backbone_role" ("id_role") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."backbone_profil"
-- ----------------------------
ALTER TABLE "sc_presensi"."backbone_profil" ADD FOREIGN KEY ("id_user") REFERENCES "sc_presensi"."backbone_user" ("id_user") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."backbone_user_role"
-- ----------------------------
ALTER TABLE "sc_presensi"."backbone_user_role" ADD FOREIGN KEY ("id_user") REFERENCES "sc_presensi"."backbone_user" ("id_user") ON DELETE CASCADE ON UPDATE NO ACTION;
ALTER TABLE "sc_presensi"."backbone_user_role" ADD FOREIGN KEY ("id_role") REFERENCES "sc_presensi"."backbone_role" ("id_role") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."ref_kabupaten_kota"
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_kabupaten_kota" ADD FOREIGN KEY ("id_provinsi") REFERENCES "sc_presensi"."ref_provinsi" ("id_provinsi") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."ref_pegawai"
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_pegawai" ADD FOREIGN KEY ("id_status_perkawinan") REFERENCES "sc_presensi"."ref_status_perkawinan" ("id_status_perkawinan") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."ref_ttd"
-- ----------------------------
ALTER TABLE "sc_presensi"."ref_ttd" ADD FOREIGN KEY ("id_pegawai") REFERENCES "sc_presensi"."ref_pegawai" ("id_pegawai") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "sc_presensi"."ref_ttd" ADD FOREIGN KEY ("id_skpd") REFERENCES "sc_presensi"."ref_skpd" ("id_skpd") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."tr_pegawai_golongan"
-- ----------------------------
ALTER TABLE "sc_presensi"."tr_pegawai_golongan" ADD FOREIGN KEY ("id_golongan") REFERENCES "sc_presensi"."ref_golongan" ("id_golongan") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "sc_presensi"."tr_pegawai_golongan" ADD FOREIGN KEY ("id_pegawai") REFERENCES "sc_presensi"."ref_pegawai" ("id_pegawai") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."tr_pegawai_profil"
-- ----------------------------
ALTER TABLE "sc_presensi"."tr_pegawai_profil" ADD FOREIGN KEY ("id_pegawai") REFERENCES "sc_presensi"."ref_pegawai" ("id_pegawai") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."tr_pegawai_skpd"
-- ----------------------------
ALTER TABLE "sc_presensi"."tr_pegawai_skpd" ADD FOREIGN KEY ("id_jabatan") REFERENCES "sc_presensi"."ref_jabatan" ("id_jabatan") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "sc_presensi"."tr_pegawai_skpd" ADD FOREIGN KEY ("id_skpd") REFERENCES "sc_presensi"."ref_skpd" ("id_skpd") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "sc_presensi"."tr_pegawai_skpd" ADD FOREIGN KEY ("id_pegawai") REFERENCES "sc_presensi"."ref_pegawai" ("id_pegawai") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."tr_pegawai_skpd_jabatan"
-- ----------------------------
ALTER TABLE "sc_presensi"."tr_pegawai_skpd_jabatan" ADD FOREIGN KEY ("id_eselon") REFERENCES "sc_presensi"."ref_eselon" ("id_eselon") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "sc_presensi"."tr_pegawai_skpd_jabatan" ADD FOREIGN KEY ("id_jabatan") REFERENCES "sc_presensi"."ref_jabatan" ("id_jabatan") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "sc_presensi"."tr_tingkat_pendidikan_pegawai"
-- ----------------------------
ALTER TABLE "sc_presensi"."tr_tingkat_pendidikan_pegawai" ADD FOREIGN KEY ("id_pegawai") REFERENCES "sc_presensi"."ref_pegawai" ("id_pegawai") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "sc_presensi"."tr_tingkat_pendidikan_pegawai" ADD FOREIGN KEY ("id_tingkat_pendidikan") REFERENCES "sc_presensi"."ref_tingkat_pendidikan" ("id_tingkat_pendidikan") ON DELETE NO ACTION ON UPDATE NO ACTION;
