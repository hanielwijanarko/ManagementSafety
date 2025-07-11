    <?php

    use App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class SafetyRecord extends Model
    {
        use HasFactory;

        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'safety_records';

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'total_man_hours',
            'fatalities',
            'property_damage_incidents',
            'property_damage_cost',
            'latest_accident_date',
            'latest_accident_hours',
            'accident_description',
            'year',
            'month',
        ];

        /**
         * The attributes that should be cast.
         *
         * @var array<string, string>
         */
        protected $casts = [
            'latest_accident_date' => 'date',
        ];
    }