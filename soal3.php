<?php

function cetak($text)
	{
		$arr_text = explode(' ', $text);

		// Unigram
		$unigram = '';
		foreach ($arr_text as $item) {
			$unigram .= $item.', ';
		}
		$unigram = substr($unigram, 0, -2);

		// Bigram
		$b = 0;
		$bigram = '';
		foreach ($arr_text as $item) {
			if ($b < 1) {
				$bigram .= $item.' ';
				$b++;
			} else {
				$bigram .= $item.', ';
				$b = 0;
			}
		}
		$bigram = substr($bigram, 0, -2);

		// Trigram
		$t = 0;
		$trigram = '';
		foreach ($arr_text as $item) {
			if ($t < 2) {
				$trigram .= $item.' ';
				$t++;
			} else {
				$trigram .= $item.', ';
				$t = 0;
			}
		}
		$trigram = substr($trigram, 0, -2);


		return 'Unigram: '. $unigram . '<br>' . 'Bigram: '. $bigram . '<br>' . 'Trigram: '. $trigram;
	}

echo cetak("Jakarta adalah ibukota negara Republik Indonesia");