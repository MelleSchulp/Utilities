<table {{ $table->renderAttributes() }}>
    @foreach ($table->getSections() as $tableSection)
        <{{ $tableSection->getType() }} {{ $tableSection->renderAttributes() }}>
            @foreach ($tableSection->getRows() as $tableRow)
                <tr {{ $tableRow->renderAttributes() }}>
                    @foreach ($tableRow->getColumns() as $tableColumn)
                        <{{ $tableColumn->getType() }} {{ $tableColumn->renderAttributes() }}>{{ $tableColumn->getContent() }}</{{ $tableColumn->getType() }}>
                    @endforeach
                </tr>
            @endforeach
        </{{ $tableSection->getType() }}>
    @endforeach
</table>
