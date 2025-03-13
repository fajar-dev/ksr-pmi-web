<?php

namespace App\Enum;

use App\Enum\Faculty;

enum Major: string
{
    case TEKNIK_SIPIL = 'Teknik Sipil';
    case TEKNIK_MESIN = 'Teknik Mesin';
    case TEKNIK_INDUSTRI = 'Teknik Industri';
    case TEKNIK_KIMIA = 'Teknik Kimia';
    case TEKNIK_ELEKTRO = 'Teknik Elektro';
    case ARSITEKTUR = 'Arsitektur';
    case TEKNIK_INFORMATIKA = 'Teknik Informatika';
    case SISTEM_INFORMASI = 'Sistem Informasi';
    case TEKNIK_MATERIAL = 'Teknik Material';
    case TEKNIK_LOGISTIK = 'Teknik Logistik';

    case D3_KESEKRETARIATAN = 'D3 Kesekretariatan';
    case MANAJEMEN = 'Manajemen';
    case AKUNTANSI = 'Akuntansi';
    case EKONOMI_PEMBANGUNAN = 'Ekonomi Pembangunan';
    case EKONOMI_ISLAM = 'Ekonomi Islam';
    case KEWIRAUSAHAAN = 'Kewirausahaan';

    case AGROEKOTEKNOLOGI = 'Agroekoteknologi';
    case AGRIBISNIS = 'Agribisnis';
    case AKUAKULTUR = 'Akuakultur';
    case ILMU_KELAUTAN = 'Ilmu Kelautan';

    case ADMINISTRASI_PUBLIK = 'Administrasi Publik';
    case ILMU_POLITIK = 'Ilmu Politik';
    case ANTROPOLOGI = 'Antropologi';
    case ILMU_KOMUNIKASI = 'Ilmu Komunikasi';
    case SOSIOLOGI = 'Sosiologi';
    case ADMINISTRASI_BISNIS = 'Administrasi Bisnis';

    case ILMU_HUKUM = 'Ilmu Hukum';

    case PENDIDIKAN_PROFESI_DOKTER = 'Pendidikan Profesi Dokter';
    case KEDOKTERAN = 'Kedokteran';
    case PSIKOLOGI = 'Psikologi';
    case D3_KEPERAWATAN = 'D3 Keperawatan';

    case PENDIDIKAN_MATEMATIKA = 'Pendidikan Matematika';
    case PENDIDIKAN_FISIKA = 'Pendidikan Fisika';
    case PENDIDIKAN_KIMIA = 'Pendidikan Kimia';
    case PENDIDIKAN_BAHASA_INDONESIA = 'Pendidikan Bahasa Indonesia';
    case PENDIDIKAN_VOKASIONAL_TEKNIK_MESIN = 'Pendidikan Vokasional Teknik Mesin';
    case PENDIDIKAN_PROFESI_GURU = 'Pendidikan Profesi Guru';

    public function faculty(): Faculty
    {
        return match ($this) {
            self::TEKNIK_SIPIL, self::TEKNIK_MESIN, self::TEKNIK_INDUSTRI, self::TEKNIK_KIMIA, self::TEKNIK_ELEKTRO, self::ARSITEKTUR, self::TEKNIK_INFORMATIKA, self::SISTEM_INFORMASI, self::TEKNIK_MATERIAL, self::TEKNIK_LOGISTIK => Faculty::TEKNIK,
            self::D3_KESEKRETARIATAN, self::MANAJEMEN, self::AKUNTANSI, self::EKONOMI_PEMBANGUNAN, self::EKONOMI_ISLAM, self::KEWIRAUSAHAAN => Faculty::EKONOMI_DAN_BISNIS,
            self::AGROEKOTEKNOLOGI, self::AGRIBISNIS, self::AKUAKULTUR, self::ILMU_KELAUTAN => Faculty::PERTANIAN,
            self::ADMINISTRASI_PUBLIK, self::ILMU_POLITIK, self::ANTROPOLOGI, self::ILMU_KOMUNIKASI, self::SOSIOLOGI, self::ADMINISTRASI_BISNIS => Faculty::FISIP,
            self::ILMU_HUKUM => Faculty::HUKUM,
            self::PENDIDIKAN_PROFESI_DOKTER, self::KEDOKTERAN, self::PSIKOLOGI, self::D3_KEPERAWATAN => Faculty::KEDOKTERAN,
            self::PENDIDIKAN_MATEMATIKA, self::PENDIDIKAN_FISIKA, self::PENDIDIKAN_KIMIA, self::PENDIDIKAN_BAHASA_INDONESIA, self::PENDIDIKAN_VOKASIONAL_TEKNIK_MESIN, self::PENDIDIKAN_PROFESI_GURU => Faculty::FKIP,
        };
    }
}
