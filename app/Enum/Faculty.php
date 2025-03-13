<?php

namespace App\Enum;

enum Faculty: string
{
    case TEKNIK = 'Fakultas Teknik';
    case EKONOMI_DAN_BISNIS = 'Fakultas Ekonomi dan Bisnis';
    case PERTANIAN = 'Fakultas Pertanian';
    case FISIP = 'Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)';
    case HUKUM = 'Fakultas Hukum';
    case KEDOKTERAN = 'Fakultas Kedokteran';
    case FKIP = 'Fakultas Keguruan dan Ilmu Pendidikan (FKIP)';
}