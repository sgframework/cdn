            
            @php
                include_once('../public/Classes/PHPExcel.php');
            

            $excel = new PHPExcel();

            $excel->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'Hello')
                    ->setCellValue('B1', 'World');

            $file = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
            $file->save('test.xlsx');            
            @endphp
            @if (!$orders->count())
                        <p>No results found, sorry</p> <span>&larr; <a href="/">Back</a></span><span style="float:right"><hr />
                    @else

                    @foreach ($orders as $order)
                            @include('orders/partials/orderblock')
                        @endforeach	
                    @endif
<br />