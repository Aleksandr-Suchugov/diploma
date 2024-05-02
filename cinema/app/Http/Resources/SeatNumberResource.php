namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SeatsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'hall_id' => $this->hall_id,
            'rowNumber' => $this->rowNumber,
            'seatNumber' => $this->seatNumber,
            'type_id' => $this->type_id,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}