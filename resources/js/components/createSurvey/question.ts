import {InjectionKey} from 'vue'
type questionController = {
    moveUp: () => void;
    moveDown: () => void;
}

export cosnt quesetionControllerKey: InjectionKey<questionController> = Symbol()