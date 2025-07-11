<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SafetyRecord; // Pastikan model SafetyRecord sudah ada dan diimpor

class SafetyDashboard extends Component
{
    // Properti publik untuk menyimpan data yang akan ditampilkan di Blade
    public $totalManHours = '0 0 0 0 0 0';
    public $fatalities = '0 0 0';
    public $propertyDamage = '0 0 0';
    public $latestAccidentDate = 'DD MMM YY';
    public $latestAccidentHours = '0 0 0';

    public $year;
    public $month;

    /**
     * Metode mount dipanggil saat komponen diinisialisasi.
     * Digunakan untuk mengambil data awal dari database.
     */
    public function mount()
    {
        // Set tahun dan bulan default ke tahun dan bulan saat ini
        $this->year = date('Y');
        $this->month = strtoupper(date('M')); // Contoh: 'JUL' untuk Juli

        // Mencoba memuat catatan keselamatan terbaru untuk bulan/tahun saat ini
        // Pastikan Anda telah menjalankan migrasi dan memiliki data di tabel safety_records
        $safetyRecord = SafetyRecord::where('year', $this->year)
                                    ->where('month', $this->month)
                                    ->first();

        // Jika catatan ditemukan, perbarui properti publik dengan data tersebut
        if ($safetyRecord) {
            $this->totalManHours = number_format($safetyRecord->total_man_hours, 0, '', ' ');
            $this->fatalities = str_pad($safetyRecord->fatalities, 3, '0', STR_PAD_LEFT);
            $this->propertyDamage = str_pad($safetyRecord->property_damage_incidents, 3, '0', STR_PAD_LEFT);
            $this->latestAccidentDate = $safetyRecord->latest_accident_date ? \Carbon\Carbon::parse($safetyRecord->latest_accident_date)->format('d M y') : 'N/A';
            $this->latestAccidentHours = str_pad($safetyRecord->latest_accident_hours, 3, '0', STR_PAD_LEFT);
        }
    }

    /**
     * Metode render bertanggung jawab untuk merender tampilan Blade komponen.
     */
    public function render()
    {
        return view('livewire.safety-dashboard');
    }
}