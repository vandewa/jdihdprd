<?php

namespace App\Models\Simpeg;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Simpeg\ASkpd;

class Tb01 extends Model
{
    use HasFactory;

    protected $table = 'tb_01';
    protected $connection = "simpeg";
    protected $primaryKey = 'nip';

    public function getTmtketAttribute($value)
    {

        if ($value != '0000-00-00') {
            return $value;
        }

        return '1900-01-02';

    }
    public function getTmstampAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00 00:00:00') {
                $value = substr($value, 0, 10);
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTmstampupAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00 00:00:00') {
                $value = substr($value, 0, 10);
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getLastloginAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00 00:00:00') {
                $value = substr($value, 0, 10);
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTgbkncpnAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgskcpnAttribute($value)
    {

        if ($value != '0000-00-00') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }
            return $value;
        }

        return '1970-01-02';

    }
    public function getTmtcpnAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTmttgscpnAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgsttpdikcpnAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgspmtcpnAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTmtspmtcpnAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgskpnsAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgbknpktAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgsuratkgbAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgskkgbAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTmtkgbAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTmtskpdAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgskjbtAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTmtesljbtAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTglantikjbtAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgmulDikstruAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgselDikstruAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgsttpDikstruAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgmulDikfungAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTgselDikfungAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $a = substr($value, 0, 6);
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;
    }
    public function getTgsttpDikfungAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00 00:00:00') {
                $value = substr($value, 0, 10);
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTgmulDiktekAttribute($value)
    {
        if ($value != '') {
            if ($value != '0000-00-00 00:00:00') {
                $value = substr($value, 0, 10);
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTgselDiktekAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00 00:00:00') {
                $value = substr($value, 0, 10);
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTgsttpDiktekAttribute($value)
    {
        if ($value != '0000-00-00') {
            $tempDate = explode('-', $value);
            /**
             * checkdate menggunakan format gregorian, month, day, year
             */
            if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                return $value;
            }
            return $tempDate[0] . "-01-01";
        }

        return '1970-01-02';

    }
    public function getTmtpensiunAttribute($value)
    {
        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTgceraiAttribute($value)
    {
        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTmtkgbnextAttribute($value)
    {
        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTmthukdis1Attribute($value)
    {
        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTmthukdis2Attribute($value)
    {
        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTgpak2Attribute($value)
    {
        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTgpakAttribute($value)
    {
        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTghonorerAttribute($value)
    {
        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;
    }
    public function getTmtkgbnexttAttribute($value)
    {
        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTglhrissuAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgnikahAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgjenhargaAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTgjenhukumAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }

    /**
     * Ditemukan kesalahan penanggalan 2016-00-00 kemudian dirubah menjadi 2016-00-00
     * @param $value
     * @return string
     */
    public function getTglskpensAttribute($value)
    {

        if ($value != '0000-00-00') {
            $tempDate = explode('-', $value);
            /**
             * checkdate menggunakan format gregorian, month, day, year
             */
            if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                return $value;
            }
            return $tempDate[0] . "-01-01";
        }

        return '1970-01-02';

    }

    public function getTmtpnsAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTmtjbtAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }
    public function getTmtjabfungAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00') {
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;


    }

    /**
     * Setelah kesalahan tanggal 0000-00-00 ditemukan lagi kesalahan 2016-00-00
     * yang menyalahi peraturan pembuatan tanggal, kemudian disesuaikan menjadi
     * 2016-01-01
     * @param $value
     * @return string
     */
    public function getTmtpensAttribute($value)
    {

        if ($value != '0000-00-00') {
            if ($value == '2016-00-00') {
                return '2016-01-01';
            }
            return $value;
        }

        return '1970-01-02';

    }
    public function getTmtkepsekAttribute($value)
    {

        if ($value != '') {
            if ($value != '0000-00-00 00:00:00') {
                $value = substr($value, 0, 10);
                $tempDate = explode('-', $value);
                /**
                 * checkdate menggunakan format gregorian, month, day, year
                 */
                if (checkdate($tempDate[1], $tempDate[2], $tempDate[0])) {
                    return $value;
                }
                return $tempDate[0] . "-01-01";
            }

            return '1970-01-02';
        }
        return null;

    }
    public function getTgspmtpnsAttribute($value)
    {

        if ($value != '0000-00-00 00:00:00' and $value != '0000-00-00') {
            return $value;
        }

        return '1970-01-02';

    }
    public function getTmtspmtpnsAttribute($value)
    {

        if ($value != '0000-00-00 00:00:00' and $value != '0000-00-00') {
            return $value;
        }

        return '1970-01-02';

    }
    public function getTmtmasukAttribute($value)
    {

        if ($value != '0000-00-00 00:00:00' and $value != '0000-00-00') {
            return $value;
        }

        return '1970-01-02';

    }

    /**
     * Terjadi Kesalahan tanggal pada data sumber awal yaitu 2016-00-00
     * Kemudian di ganti menjadi 2016-01-01
     * @param $value
     * @return string
     */
    public function gettTtpensAttribute($value)
    {

        if ($value != '2016-00-00' and $value != '0000-00-00') {
            return $value;
        }

        return '2016-01-01';

    }

    public function getCreatedAtAttribute($value)
    {

        return date('Y-m-d H:i:s', strtotime($value));

    }
    public function getUpdatedAtAttribute($value)
    {

        return date('Y-m-d H:i:s', strtotime($value));

    }

    public function skpd()
    {
        return $this->belongsTo(ASkpd::class, 'idskpd', 'idskpd')
            ->select('idskpd', 'idparent', 'skpd', 'path_short');
    }


}
