<?php



//クラスやモジュールは、他のクラスやモジュールとのインターフェースを持つべきである。
//つまり、詳細な処理を隠蔽して、外部からアクセスするためのインターファイスを用意するべきである。
// こうすることで、関数をしようするクライアントは詳細な処理を知る必要がなくなる。

class calc
{
    //内部処理（外部からアクセス出来ない）
    //引数 2 → 返り値 ４
    private function square($num)
    {
        return $num ** 2;
    }
    //外部からアクセスするためのインターフェイス
    public function getSquare($num)
    {
        return $this->square($num);
    }
}


$calc = new calc();
echo $calc->getSquare(2); //4