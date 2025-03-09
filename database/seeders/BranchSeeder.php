<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    private $branches = [
        ["name" => "Chadiza Branch", "contact_number" => "0968 501 639", "contact_number_2" => "0971 132 995", "email" => ""],
        ["name" => "Chama Branch", "contact_number" => "0971 133 007", "contact_number_2" => "0971 133 007", "email" => ""],
        ["name" => "Chambishi Branch", "contact_number" => "0961 259 966", "contact_number_2" => "0971 132 730", "email" => ""],
        ["name" => "Chembe Branch", "contact_number" => "0971 133 158", "contact_number_2" => "0762 435 073", "email" => ""],
        ["name" => "Chibombo Branch", "contact_number" => "0978 498 563", "contact_number_2" => "0765 647 048", "email" => ""],
        ["name" => "Chililabombwe Branch", "contact_number" => "0964 331 786", "contact_number_2" => "0971 132 733", "email" => ""],
        ["name" => "Chingola Branch", "contact_number" => "0961 355 701", "contact_number_2" => "0971 132 737", "email" => ""],
        ["name" => "Chinsali Branch", "contact_number" => "0968 501 350", "contact_number_2" => "0971 133 130", "email" => ""],
        ["name" => "Chipata Branch", "contact_number" => "0960 708 621", "contact_number_2" => "0971 133 150", "email" => ""],
        ["name" => "Chirundu Branch", "contact_number" => "0964 331 780", "contact_number_2" => "0971 132 733", "email" => ""],
        ["name" => "Chisamba Branch", "contact_number" => "0960 740 099", "contact_number_2" => "0971 134 297", "email" => ""],
        ["name" => "Choma Branch", "contact_number" => "0966 814 563", "contact_number_2" => "0971 133 001", "email" => ""],
        ["name" => "Chongwe Branch", "contact_number" => "0964 371 767", "contact_number_2" => "0971 133 070", "email" => ""],
        ["name" => "Isoka Branch", "contact_number" => "0965 767 568", "contact_number_2" => "0971 132 493", "email" => ""],
        ["name" => "Itezhi Branch", "contact_number" => "0961 360 427", "contact_number_2" => "0971 132 200", "email" => ""],
        ["name" => "Kabwe Branch", "contact_number" => "0961 260 032", "contact_number_2" => "0971 133 186", "email" => ""],
        ["name" => "Kafue Branch", "contact_number" => "0966 222 601", "contact_number_2" => "0971 133 516", "email" => ""],
        ["name" => "Kalomo Branch", "contact_number" => "0969 308 010", "contact_number_2" => "0971 132 504", "email" => ""],
        ["name" => "Kalulushi Branch", "contact_number" => "0961 260 033", "contact_number_2" => "0971 132 734", "email" => ""],
        ["name" => "Kaoma Branch", "contact_number" => "0961 320 605", "contact_number_2" => "0971 132 150", "email" => ""],
        ["name" => "Kapiri Branch", "contact_number" => "0961 356 113", "contact_number_2" => "0971 132 755", "email" => ""],
        ["name" => "Kapiri Branch", "contact_number" => "0961 356 113", "contact_number_2" => "0971 132 755", "email" => ""],
        ["name" => "Kasama Branch", "contact_number" => "0968 501 443", "contact_number_2" => "0971 132 750", "email" => ""],
        ["name" => "Katete Branch", "contact_number" => "0961 708 699", "contact_number_2" => "0971 132 411", "email" => ""],
        ["name" => "Kawambwa Branch", "contact_number" => "0961 260 032", "contact_number_2" => "0971 132 719", "email" => ""],
        ["name" => "Kitwe Branch", "contact_number" => "0961 355 917", "contact_number_2" => "0971 132 711", "email" => ""],
        ["name" => "Livingstone Branch", "contact_number" => "0968 501 877", "contact_number_2" => "0971 133 684", "email" => ""],
        ["name" => "Luangwa Branch", "contact_number" => "0971 133 190", "contact_number_2" => "0971 133 199", "email" => ""],
        ["name" => "Lusaka Branch", "contact_number" => "0967 820 752", "contact_number_2" => "0971 133 144", "email" => ""],
        ["name" => "Luwi Branch", "contact_number" => "0971 133 174", "contact_number_2" => "0762 435 074", "email" => ""],
        ["name" => "Maamba Branch", "contact_number" => "0961 259 257", "contact_number_2" => "0971 133 260", "email" => ""],
        ["name" => "Mansa Branch", "contact_number" => "0961 260 186", "contact_number_2" => "0971 133 183", "email" => ""],
        ["name" => "Matero Branch", "contact_number" => "0971 133 091", "contact_number_2" => "0971 133 091", "email" => ""],
        ["name" => "Mazabuka Branch", "contact_number" => "0966 796 934", "contact_number_2" => "0971 133 124", "email" => ""],
        ["name" => "Mbala Branch", "contact_number" => "0961 260 211", "contact_number_2" => "0971 133 153", "email" => ""],
        ["name" => "Mfuve Branch", "contact_number" => "0971 132 721", "contact_number_2" => "0960 708 623", "email" => ""],
        ["name" => "Mkushi Branch", "contact_number" => "0971 132 342", "contact_number_2" => "0971 259 089", "email" => ""],
        ["name" => "Mongu Branch", "contact_number" => "0966 774 998", "contact_number_2" => "0971 133 629", "email" => ""],
        ["name" => "Monze Branch", "contact_number" => "0971 132 086", "contact_number_2" => "0971 133 078", "email" => ""],
        ["name" => "Mpika Branch", "contact_number" => "0960 740 099", "contact_number_2" => "0971 134 297", "email" => ""],
        ["name" => "Mporokoso Branch", "contact_number" => "0961 260 218", "contact_number_2" => "0971 132 119", "email" => ""],
        ["name" => "Mpulungu Branch", "contact_number" => "0964 326 827", "contact_number_2" => "0971 132 059", "email" => ""],
        ["name" => "Mumbwa Branch", "contact_number" => "0961 259 839", "contact_number_2" => "0971 133 607", "email" => ""],
        ["name" => "Munali Branch", "contact_number" => "0971 132 468", "contact_number_2" => "0971 133 741", "email" => ""],
        ["name" => "Mungwi Branch", "contact_number" => "0971 133 681", "contact_number_2" => "0765 434 218", "email" => ""],
        ["name" => "Mwense Branch", "contact_number" => "0971 133 181", "contact_number_2" => "0764 037 483", "email" => ""],
        ["name" => "Nakonde Branch", "contact_number" => "0968 501 120", "contact_number_2" => "0971 133 250", "email" => ""],
        ["name" => "Namwala Branch", "contact_number" => "0961 260 109", "contact_number_2" => "0971 133 487", "email" => ""],
        ["name" => "Nchelenge Branch", "contact_number" => "0965 746 631", "contact_number_2" => "0971 132 709", "email" => ""],
        ["name" => "Ndola Branch", "contact_number" => "0961 260 032", "contact_number_2" => "0971 132 704", "email" => ""],
        ["name" => "Nyimba Branch", "contact_number" => "0960 708 624", "contact_number_2" => "0971 133 264", "email" => ""],
        ["name" => "Pemba Branch", "contact_number" => "0968 501 458", "contact_number_2" => "0971 133 343", "email" => ""],
        ["name" => "Petaika Branch", "contact_number" => "0968 501 021", "contact_number_2" => "0971 133 059", "email" => ""],
        ["name" => "Samfya Branch", "contact_number" => "0961 258 973", "contact_number_2" => "0971 132 617", "email" => ""],
        ["name" => "Senanga Branch", "contact_number" => "0963 307 287", "contact_number_2" => "0971 133 600", "email" => ""],
        ["name" => "Serenje Branch", "contact_number" => "0960 766 729", "contact_number_2" => "0971 133 196", "email" => ""],
        ["name" => "Sesheke Branch", "contact_number" => "0961 259 998", "contact_number_2" => "0971 133 624", "email" => ""],
        ["name" => "Siaongwa Branch", "contact_number" => "0960 708 616", "contact_number_2" => "0971 133 679", "email" => ""],
        ["name" => "Sinazeze Branch", "contact_number" => "0968 501 017", "contact_number_2" => "0971 134 054", "email" => ""],
        ["name" => "Sinda Branch", "contact_number" => "0964 335 476", "contact_number_2" => "0971 132 369", "email" => ""],
        ["name" => "Solwezi Branch", "contact_number" => "0964 331 531", "contact_number_2" => "0971 133 154", "email" => ""],
        ["name" => "UTH Branch", "contact_number" => "0978 498 561", "contact_number_2" => "0978 498 561", "email" => ""],
        ["name" => "Zimba Branch", "contact_number" => "0964 733 021", "contact_number_2" => "0978 498 561", "email" => ""]
    ];
    public function run(): void
    {
        foreach ($this->branches as $branch) {
            Branch::create([
                'name' => $branch['name'],
                'contact_number' => $branch['contact_number'],
                'contact_number_2' => $branch['contact_number_2'],
                'contact_email'=>$branch['email'],
            ]);
        }
    }
}
