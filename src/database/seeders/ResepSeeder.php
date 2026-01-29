<?php

namespace Database\Seeders;

use App\Models\Resep;
use Illuminate\Database\Seeder;

class ResepSeeder extends Seeder
{
    public function run(): void
    {
        $reseps = [
            // Resep untuk Kunjungan 1 (Demam Tifoid)
            [
                'no_resep' => 'RSP' . date('Ymd') . '001',
                'kunjungan_id' => 1,
                'dokter_id' => 1,
                'pasien_id' => 1,
                'obat_id' => 1,
                'jumlah' => 3,
                'aturan_pakai' => '3x sehari 1 tablet setelah makan',
                'harga_satuan' => 5000,
                'subtotal' => 15000,
                'tanggal_resep' => now()->format('Y-m-d'),
                'status' => 'Diambil',
            ],
            [
                'no_resep' => 'RSP' . date('Ymd') . '002',
                'kunjungan_id' => 1,
                'dokter_id' => 1,
                'pasien_id' => 1,
                'obat_id' => 2,
                'jumlah' => 2,
                'aturan_pakai' => '3x sehari 1 kapsul setelah makan, habiskan',
                'harga_satuan' => 12000,
                'subtotal' => 24000,
                'tanggal_resep' => now()->format('Y-m-d'),
                'status' => 'Diambil',
            ],
            
            // Resep untuk Kunjungan 2 (ISPA)
            [
                'no_resep' => 'RSP' . date('Ymd') . '003',
                'kunjungan_id' => 2,
                'dokter_id' => 2,
                'pasien_id' => 2,
                'obat_id' => 3,
                'jumlah' => 1,
                'aturan_pakai' => '3x sehari 1 sendok teh',
                'harga_satuan' => 22000,
                'subtotal' => 22000,
                'tanggal_resep' => now()->format('Y-m-d'),
                'status' => 'Diambil',
                'catatan' => 'Untuk anak, perhatikan dosis',
            ],
        ];

        foreach ($reseps as $resep) {
            Resep::create($resep);
        }
    }
}