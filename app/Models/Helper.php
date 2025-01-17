
<?php

use Astrotomic\Translatable\Locales;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request as IlluminateRequest;
use Exception as Exception;

class Helper
{

    /*
    * FUNCIONES PARA LA API
    */
    public static function initializeAPIOutput ()
    {
        $output = array();
        $output['ok']=0;
        $output['code']=null;
        $output['message']='';

        return $output;
    }

    public static function returnAPIOutput ($ok=0, $code=null, $message="", $content=null)
    {
        $output = array();
        $output["ok"] = $ok;
        $output["code"] = $code;
        $output["message"] = $message;
        if ($content) $output["content"] = $content;

        return $output;
    }

    public static function logErrorAPI (IlluminateRequest $request, $error)
    {
        Log::channel('api')->info($request->all());
        Log::channel('api')->info($error);

        $output = array();
        $output["ok"] = 0;
        $output["code"] = null;
        $output["message"] = "Error de excepción: ".$error;

        return $output;
    }

    public static function cURLRequest ($url, $headers, $data, $method, $throwError = false)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        // SSL important
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt(
          $ch,
          CURLOPT_HTTPHEADER,
          $headers
        );
        if ((is_array($data) && sizeof($data) > 0) || is_object($data)) {
          curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
        if ($method == 'POST' OR $method=="PUT") {
          curl_setopt($ch, CURLOPT_POST, 1);
        } else {
          curl_setopt($ch, CURLOPT_POST, 0);
        }

        $output = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $error_msg = false;
        if ($output == false) {
          $error_msg = curl_error($ch);

          if ($throwError === true) {
              curl_close($ch);
              throw new Exception($error_msg);
          }
        }

        curl_close($ch);

        $response = json_decode(trim($output));

        $output = [
            "response" => $response,
            "error_msg" => $error_msg,
            "http_code" => $http_code,
        ];

        return $output;
    }

    public static function logException ($method, $params, $e, $trace=false)
    {
        Log::channel('exceptions')->info($method);
        Log::channel('exceptions')->info($params);
        Log::channel('exceptions')->info('Exception in: ' . $e->getFile() . ' on line ' . $e->getLine());
        Log::channel('exceptions')->info($e->getMessage());
        if ($trace) Log::channel('exceptions')->info('Stack trace: ' . $e->getTraceAsString());

        return true;
    }

    public static function changeFilePermission ($file, $user='www-data')
    {
        try {
          // Cambiar el propietario del archivo
          if (!chown($file, $user)) {
            // echo "Error al cambiar el propietario del archivo";
            info("Error al cambiar el propietario del archivo: ".$file." al usuario: ".$user);
          }

          // Otorgar permisos de lectura al propietario del archivo
          if (!chmod($file, 0644)) {
            // echo "Error al cambiar los permisos del archivo";
            info("Error al cambiar el permisos del archivo: ".$file." al usuario: ".$user);
          }

          return true;
        } catch (\Throwable $e) {
            Log::channel('exceptions')->info("changeFilePermission - Excepcion: ".$file);
            Log::channel('exceptions')->info($e->getMessage());

            return false;
        }
    }


    public static function notificationsValidator($errors)
    {
        $result = '<div class="alert alert-danger">
				  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				  <strong>Error!</strong>&nbsp;';

        foreach ($errors->all() as $e) {
            $result = $result . $e . '<br>';
        }

        $result = $result . '</div>';
        return $result;
    }

    public static function getValidatorMessages ()
    {
        $messages = [
          'required' => 'El campo :attribute es obligatorio.',
          'unique' => 'El campo :attribute debe ser único.',
          'string' => 'El campo :attribute debe ser texto.',
          'max' => 'El campo :attribute debe contener como máximo :max caracteres.',
          'numeric' => 'El campo :attribute debe ser numérico.',
          'email' => 'El campo :attribute debe ser un correo electrónico.',
          'date' => 'El campo :attribute debe ser una fecha.',
        ];

        return $messages;
    }

    public static function generateFilename($file)
    {
        $pathInfo = pathinfo($file);

        $filename = preg_replace("/[^a-z0-9\_\-\.]/i", '', $pathInfo['filename']);
        $extension = isset($pathInfo['extension']) ? $pathInfo['extension'] : '';

        return $filename . "_" . time() . ($extension ? "." . $extension : '');
    }


    // Graba en cache la ultima url para al volver redirigirnos alli
    public static function recordLastURL()
    {
        // Grabamos última url
        if (!Session::get('back_url') && URL::current() != URL::previous()) {
            Session::flash('back_url', URL::previous());
        } else {
            Session::reflash();
        }
    }

    public static function checkUrl($url)
    {
        $url = str_replace(URL::to('/').'/', '', $url);
        $current = Request::path();
        return $url == $current;
    }


    // Función para mostrar los botones para ordenar la columna
    public static function orderColumns($tabla, $columna, $orden)
    {
        if ($tabla == $columna) {
            switch ($orden) {
                case "asc":
                case "ASC":
                    $result = '<a class="order" data-order_col="' . $tabla . '" data-order="DESC"><i class="btn btn-rounded btn-light btn-xs fa fa-sort-asc"></i></a>';
                    break;
                case "DESC":
                case "desc":
                    $result = '<a class="order" data-order_col="' . $tabla . '" data-order="ASC"><i class="btn btn-rounded btn-light btn-xs fa fa-sort-desc"></i></a>';
                    break;
                default:
                    $result = '<a href="?order_col=' . $tabla . '&order=DESC"><i class="btn btn-rounded btn-light btn-xs fa fa-sort"></i></a>';
                    break;
            } // End switch
        } else {
            $result = '<a class="order" data-order_col="' . $tabla . '" data-order="DESC"><i class="btn btn-rounded btn-light btn-xs fa fa-sort"></i></a>';
        }

        return $result;
    }

    // Función para ordenar cualquier colección (ordenar una query)
    public static function orderColumn($collection, $order_col, $order, $default_col = 'id', $default_order = 'DESC', $hasTranslations = false): \Illuminate\Database\Eloquent\Builder
    {
        if ($hasTranslations) {
            return $order_col && $order
                ? $collection->orderByTranslation($order_col, $order)
                : $collection->orderByTranslation($default_col, $default_order);
        }

        return $order_col && $order ? $collection->orderBy($order_col, $order) : $collection->orderBy($default_col, $default_order);
    }


    public static function getCurrency()
    {
        $currency = config('app.currency');

        return $currency;
    }


    public static function showPrice($price)
    {
        // $output = number_format($price, 2, ',', '');
        $currency = config('app.currency');

        if (config('app.country') == 'CO')
        {
            $output = number_format($price, 0, ",", ".");
            $output = $currency.$output;
        } else {
            $output = number_format($price, 2, ".", ",");
            $output .= $currency;
        }

        return $output;
    }

    public static function showPriceColored ($price)
    {
        $currency = config('app.currency');
        $text = number_format($price, 2, ".", ",");
        $text .= $currency;

        if ($price >= 0)
        {
          $output = '<span class="text-success">'.$text.'</span>';
        } else {
          $output = '<span class="text-danger">'.$text.'</span>';
        }

        return $output;
    }

    // Función para comprobar el formato de un importe a la hora de guardar en la BD
    public static function convertAmount($amount)
    {
        $amount_ok = floatval(str_replace(',', '.', $amount));

        if (config('app.country') == 'CO')
        {
            $amount_ok = intval($amount_ok);
        }

        return $amount_ok;
    }

    // Función para mostrar la fecha en formato dd-mm-YYYY
    public static function showDate($date, $hour = false)
    {
        if (is_null($date)) return '';

        return $hour ? date('d-m-Y H:i:s', strtotime($date)) : date('d-m-Y', strtotime($date));
    }

    public static function showHour($date, $seconds = false)
    {
        return $seconds ? date('H:i:s', strtotime($date)) : date('H:i', strtotime($date));
    }

    // función para mostrar el tamaño
    public static function showSize($size, $format=null)
    {
        $output = $size.'MB';

        return $output;
    }

    public static function getGreeting()
    {
        $hour = date('H');
        $output = __('common.buenos_dias');
        if ($hour >= 12) $output = __('common.buenas_tardes');
        if ($hour >= 20 OR $hour<=5) $output = __('common.buenas_noches');

        return $output;
    }

    public static function checkCurrentLanguage($lang)
    {
        $locale = Session::get('locale');

        if ($locale)
        {
            if (strcmp($locale, $lang) == 0)
            {
                return true;
            }
        } else {
            if (strcmp($lang, 'ES') == 0)
            {
                return true;
            }
        }

        return false;
    }

    public static function checkCountry ($country_code)
    {
        if (strcasecmp(config('app.country'), $country_code) == 0)
        {
            return true;
        } else {
            return false;
        }
    }

    public static function getPhoneNumber($string)
    {
        $phone = str_replace("+", "", (str_replace(")","",(str_replace("(","",(str_replace("-","",(str_replace(" ", "", $string)))))))));

        // $first_2_digits = substr($phone, 0, 2);
        // switch (config('app.country')) {
        //   case "ES": if ($first_2_digits == "34") $phone = str_replace("34", "", $phone); break;
        //   case "PT": if ($first_2_digits == "351") $phone = str_replace("351", "", $phone); break;
        //   case "CO": if ($first_2_digits == "57") $phone = str_replace("57", "", $phone); break;
        //   case "MX": if ($first_2_digits == "52") $phone = str_replace("52", "", $phone); break;
        //   default: $phone = $phone; break;
        // }

        return $phone;
    }

    public static function getRootUrl($url)
    {
        $parsedUrl = parse_url($url);
        $rootUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];

        return $rootUrl;
    }

    public static function getStringMRW ($string)
    {
        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);

        $string = str_replace("'", "", $string); // Quitar comillas simples
        $string = str_replace(",", " ", $string); // Sustituir comas por espacios
        $string = str_replace(".", " ", $string);
        // $string = str_replace("º", "", $string);

        return $string;
    }

    public static function removeAccents ($string)
    {
        $string = str_replace(
          array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
          array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
          $string
        );

        $string = str_replace(
          array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
          array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
          $string );

        $string = str_replace(
          array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
          array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
          $string );

        $string = str_replace(
          array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
          array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
          $string );

        $string = str_replace(
          array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
          array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
          $string );

        return $string;
    }

    public static function checkSpecialChars ($string)
    {
        $string_ascii = iconv('UTF-8', 'ASCII//TRANSLIT', $string);

        $output = str_replace("'", "", $string_ascii);

        return $output;
    }

    public static function querySearch ($q)
    {
        $q = str_replace("+", "", $q);
        $regex = "~(?<=\d)\s+(?=\d)~";
        $q = preg_replace($regex, '', $q);

        return $q;
    }

    // Cache
    public static function saveCache ($var_name, $value)
    {
        $save = Cache::put($var_name, $value);

        return $save;
    }

    public static function getSavedCache ($var_name)
    {
        $output = Cache::get($var_name);

        return $output;
    }

    public static function deleteCache ($var_name)
    {
        $delete = Cache::delete($var_name);

        return null;
    }

    public static function calculateHours ($time_in_mins)
    {
        $hours = floor($time_in_mins / 60);
        $minutes = ($time_in_mins % 60);

        $output = $hours.' h '.$minutes.' mins';

        return $output;
    }

    public static function showMonth ($month)
    {
        switch($month){
          case 1: return 'Enero'; break;
          case 2: return 'Febrero'; break;
          case 3: return 'Marzo'; break;
          case 4: return 'Abril'; break;
          case 5: return 'Mayo'; break;
          case 6: return 'Junio'; break;
          case 7: return 'Julio'; break;
          case 8: return 'Agosto'; break;
          case 9: return 'Septiembre'; break;
          case 10: return 'Octubre'; break;
          case 11: return 'Noviembre'; break;
          case 12: return 'Diciembre'; break;
          default: return 'ERROR!'; break;
        }
    }

}
