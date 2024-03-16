<?php

    #   //  COPIAR, MOVER, RENOMEAR E ELIMINAR ARQUIVOS
    #
    #   //  Copiar um arquivo 
    #   copy( __DIR__ . '/file_to_move.nfo', __DIR__ . '/destino/file1.nfo' );
    #
    #   //  alterar nome do arquivo após a cópia
    #   copy(__DIR__ . '/file_to_move.nfo', __DIR__ . '/destino/new_file.nfo');

        #   //  alterar nome do arquivo após a cópia
    #   move(__DIR__ . '/file_to_move.nfo', __DIR__ . '/destino/file_to_move.nfo')

    #    //Renomear
    #    rename(__DIR__ . '/file_to_move.nfo', __DIR__ . '/new_file_to_move.nfo');

        //Deletar
        unlink('file_to_delete.nfo');