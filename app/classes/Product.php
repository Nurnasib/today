<?php


namespace App\classes;


class Product
{
    protected $products = [];
    protected $id;
    protected $product;
    protected $result = [];
    public function __construct($data=null)
    {
        if (isset($data['search']))
        {
            $this->id = $data['search'];
        }
    }

    public function getAllProduct()
    {
        return[
            0=>[
                'id'=>1,
                'name'=>'T-shirt',
                'category'=>'Man Fashion',
                'brand'=>'Yello',
                'price'=>'999',
                'description'=>'I have owned previously the samsung s7 edge and with it I had the samsung gear s2 smart watch. At the time I was pleased with both the phone and the watch, but ...',
                'image'=>'t-shirt.jpg'
            ],
            1=>[
                'id'=>2,
                'name'=>'Camera',
                'category'=>'Electronics',
                'brand'=>'Canon',
                'price'=>'62,999',
                'description'=>'I have owned previously the samsung s7 edge and with it I had the samsung gear s2 smart watch. At the time I was pleased with both the phone and the watch, but ...',
                'image'=>'camera.jpeg'
            ],
            2=>[
                'id'=>3,
                'name'=>'Shirt',
                'category'=>'Fashion',
                'brand'=>'Yellow',
                'price'=>'9999',
                'description'=>'I have owned previously the samsung s7 edge and with it I had the samsung gear s2 smart watch. At the time I was pleased with both the phone and the watch, but ...',
                'image'=>'ss1.webp'
            ],
            3=>[
                'id'=>4,
                'name'=>'Shirt',
                'category'=>'EFashion',
                'brand'=>'Freeland',
                'price'=>'9999',
                'description'=>'I have owned previously the samsung s7 edge and with it I had the samsung gear s2 smart watch. At the time I was pleased with both the phone and the watch, but ...',
                'image'=>'ss2.webp'
            ],
            4=>[
                'id'=>5,
                'name'=>'Shirt',
                'category'=>'Fashion',
                'brand'=>'Richman',
                'price'=>'9999',
                'description'=>'I have owned previously the samsung s7 edge and with it I had the samsung gear s2 smart watch. At the time I was pleased with both the phone and the watch, but ...',
                'image'=>'ss3.webp'
            ],
            5=>[
                'id'=>6,
                'name'=>'Shirt',
                'category'=>'Fashion',
                'brand'=>'Yellow',
                'price'=>'9999',
                'description'=>'I have owned previously the samsung s7 edge and with it I had the samsung gear s2 smart watch. At the time I was pleased with both the phone and the watch, but ...',
                'image'=>'ss4.png'
            ],
        ];
    }
    public function getAllProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
    public function getProductBySearchId()
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($this->id == $product['id'])
            {
                $this->result = $product;
                break;
            }
        }
        return $this->result;
    }
}